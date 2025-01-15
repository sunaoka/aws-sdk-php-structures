<?php

namespace Sunaoka\Aws\Structures\TimestreamQuery\DescribeScheduledQuery\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $TargetMultiMeasureName
 * @property list<MultiMeasureAttributeMapping> $MultiMeasureAttributeMappings
 */
class MultiMeasureMappings extends Shape
{
    /**
     * @param array{
     *     TargetMultiMeasureName?: string|null,
     *     MultiMeasureAttributeMappings: list<MultiMeasureAttributeMapping>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
