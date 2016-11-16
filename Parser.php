<?php
namespace Markwinters\EasyGitTreeViewer;

class Parser {

    //git log --graph --decorate --oneline
    // git log --graph --full-history --all \--pretty=format:"%x1b[31m%h%x09%x1b[32m%d%x1b[0m%x20%s"
    //log --graph --abbrev-commit --decorate --format=format:'%C(bold blue)%h%C(reset) - %C(bold cyan)%aD%C(reset) %C(bold green)(%ar)%C(reset)%C(bold yellow)%d%C(reset)%n''          %C(white)%s%C(reset) %C(dim white)- %an%C(reset)'
    /**
     * @param string $branch
     * @see https://git-scm.com/docs/pretty-formats
     *
     *      
     */
    public function parse($branch = 'master') {
        exec('git log --graph --abbrev-commit --decorate --all --pretty=format:"%h %n %aD %n %s %n %d" ' . $branch, $output);
        $output = array_chunk($output, 5);
        foreach($output as $linepart) {
            //$depth = substr_count($linepart, '|');
            foreach($linepart as $test) {
                print_r($test);echo '<br />';
            }
            echo '<br><br>';
        }
    }
}