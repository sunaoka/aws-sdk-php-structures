<?php

namespace Sunaoka\Aws\Structures\BedrockAgent\UpdateDataSource\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property PatternObjectFilterConfiguration|null $patternObjectFilter
 * @property 'PATTERN' $type
 */
class CrawlFilterConfiguration extends Shape
{
    /**
     * @param array{
     *     patternObjectFilter?: PatternObjectFilterConfiguration|null,
     *     type: 'PATTERN'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
