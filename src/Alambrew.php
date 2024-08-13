<?php

namespace Alambrew;

class Alambrew
{
    public static function run()
    {
        echo "Welcome to Alambrew! The perfect solution for your problems... well, at least for now.\n";

        self::loadLinter();
        self::loadSpaghettiGenerator();
        self::loadCommentator();
        self::loadDebugger();
    }

    private static function loadLinter()
    {
        echo "Loading the Linter... Ready to ignore best practices.\n";
        Linter::initialize();
    }

    private static function loadSpaghettiGenerator()
    {
        echo "Spaghetti code generator is ready to tangle up your project.\n";
        SpaghettiGenerator::initialize();
    }

    private static function loadCommentator()
    {
        echo "Activating the sarcastic comment generator.\n";
        Commentator::initialize();
    }

    private static function loadDebugger()
    {
        echo "Debugger loaded... but don't expect too much help.\n";
        Debugger::initialize();
    }
}
