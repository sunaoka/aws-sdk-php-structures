<?php

namespace Sunaoka\Aws\Structures\TimestreamWrite\DescribeBatchLoadTask\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $TargetMultiMeasureName
 * @property list<MultiMeasureAttributeMapping> $MultiMeasureAttributeMappings
 */
class MultiMeasureMappings extends Shape
{
    /**
     * @param array{
     *     TargetMultiMeasureName?: string,
     *     MultiMeasureAttributeMappings: list<MultiMeasureAttributeMapping>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
