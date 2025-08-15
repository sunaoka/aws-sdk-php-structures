<?php

namespace Sunaoka\Aws\Structures\BedrockAgent\UpdateDataSource\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'PATTERN' $type
 * @property PatternObjectFilterConfiguration|null $patternObjectFilter
 */
class CrawlFilterConfiguration extends Shape
{
    /**
     * @param array{
     *     type: 'PATTERN',
     *     patternObjectFilter?: PatternObjectFilterConfiguration|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
