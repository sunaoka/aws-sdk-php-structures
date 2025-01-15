<?php

namespace Sunaoka\Aws\Structures\Glue\BatchGetCrawlers\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'CRAWL_EVERYTHING'|'CRAWL_NEW_FOLDERS_ONLY'|'CRAWL_EVENT_MODE'|null $RecrawlBehavior
 */
class RecrawlPolicy extends Shape
{
    /**
     * @param array{RecrawlBehavior?: 'CRAWL_EVERYTHING'|'CRAWL_NEW_FOLDERS_ONLY'|'CRAWL_EVENT_MODE'|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
