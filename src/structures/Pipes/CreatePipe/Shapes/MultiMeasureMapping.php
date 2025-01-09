<?php

namespace Sunaoka\Aws\Structures\Pipes\CreatePipe\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $MultiMeasureName
 * @property list<MultiMeasureAttributeMapping> $MultiMeasureAttributeMappings
 */
class MultiMeasureMapping extends Shape
{
    /**
     * @param array{
     *     MultiMeasureName: string,
     *     MultiMeasureAttributeMappings: list<MultiMeasureAttributeMapping>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
