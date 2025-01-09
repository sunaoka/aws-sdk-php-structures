<?php

namespace Sunaoka\Aws\Structures\Glue\GetWorkflowRun\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<Crawl> $Crawls
 */
class CrawlerNodeDetails extends Shape
{
    /**
     * @param array{Crawls?: list<Crawl>} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
