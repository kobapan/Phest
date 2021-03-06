<?php
    namespace ChatWork\Phest;

    use \scssc;

class CompilerSass extends CompilerBase {
    public function compile($source,$pathname){
        $scss = new scssc;
        $scss->setImportPaths(dirname($pathname));

        return $scss->compile($source);
    }

    public function getSectionKey(){
        return 'sass';
    }

    public function getOptionLabel(){
        return 'sass-php';
    }

    protected function getConvertFromExtension(){
        return 'scss';
    }

    protected function getConvertToExtension(){
        return 'css';
    }
}