<?php
namespace Markwinters\EasyGitTreeViewer;

class Parser {

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