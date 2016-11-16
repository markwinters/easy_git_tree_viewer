<?php
namespace Markwinters\EasyGitTreeViewer;

class Parser {

    /**
     * @param string $branch
     * @see https://git-scm.com/docs/pretty-formats     *
     */
    public function parse($branch = 'master') {
        exec('git log --graph --abbrev-commit --decorate --all --pretty=format:"%n%h%n%aD%n%s%n%d" ' . $branch, $output);
        foreach($output as $linepart) {
            $depth = substr_count($linepart, '|');
            print_r($linepart);echo '-';print_r($depth);echo '<br />';
        }
    }
}