<?php

namespace Sunaoka\Aws\Structures\Glue\GetCrawlers\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'CRAWL_EVERYTHING'|'CRAWL_NEW_FOLDERS_ONLY'|'CRAWL_EVENT_MODE' $RecrawlBehavior
 */
class RecrawlPolicy extends Shape
{
    /**
     * @param array{RecrawlBehavior?: 'CRAWL_EVERYTHING'|'CRAWL_NEW_FOLDERS_ONLY'|'CRAWL_EVENT_MODE'} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
