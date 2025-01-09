<?php

namespace Sunaoka\Aws\Structures\BedrockAgent\GetDataSource\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property PatternObjectFilterConfiguration $patternObjectFilter
 * @property 'PATTERN' $type
 */
class CrawlFilterConfiguration extends Shape
{
    /**
     * @param array{
     *     patternObjectFilter?: PatternObjectFilterConfiguration,
     *     type: 'PATTERN'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
