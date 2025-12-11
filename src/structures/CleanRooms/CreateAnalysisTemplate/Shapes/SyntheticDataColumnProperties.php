<?php

namespace Sunaoka\Aws\Structures\CleanRooms\CreateAnalysisTemplate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $columnName
 * @property 'CATEGORICAL'|'NUMERICAL' $columnType
 * @property bool $isPredictiveValue
 */
class SyntheticDataColumnProperties extends Shape
{
    /**
     * @param array{
     *     columnName: string,
     *     columnType: 'CATEGORICAL'|'NUMERICAL',
     *     isPredictiveValue: bool
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
