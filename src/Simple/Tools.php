<?php
/**
 * Simple Tools
 */

namespace Simple;

class Tools
{
    /**
     * return tomorrow timestamp
     */
    public static function getTomorrowTime()
    {
        return time() + 86400;
    }
}
