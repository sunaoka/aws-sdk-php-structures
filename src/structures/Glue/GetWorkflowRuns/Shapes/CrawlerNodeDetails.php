<?php

namespace Sunaoka\Aws\Structures\Glue\GetWorkflowRuns\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<Crawl>|null $Crawls
 */
class CrawlerNodeDetails extends Shape
{
    /**
     * @param array{Crawls?: list<Crawl>|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
