<?php

namespace Sunaoka\Aws\Structures\Glue\BatchGetCrawlers\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'ENABLE'|'DISABLE' $CrawlerLineageSettings
 */
class LineageConfiguration extends Shape
{
    /**
     * @param array{CrawlerLineageSettings?: 'ENABLE'|'DISABLE'} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
