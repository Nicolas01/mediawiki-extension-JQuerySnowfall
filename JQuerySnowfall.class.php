<?php
 
class JQuerySnowfall {

    public static function onBeforePageDisplay(OutputPage &$out, Skin &$skin) {
        $out->addModules('ext.JQuerySnowfall');
        $out->addModules('ext.JQuerySnowfall.flake');
        return true;
    }
}
