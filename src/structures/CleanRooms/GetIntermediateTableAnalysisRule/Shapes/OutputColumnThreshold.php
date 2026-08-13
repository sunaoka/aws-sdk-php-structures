<?php

namespace Sunaoka\Aws\Structures\CleanRooms\GetIntermediateTableAnalysisRule\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $outputColumnName
 * @property int<0, 100000> $minimumIdentityCount
 */
class OutputColumnThreshold extends Shape
{
    /**
     * @param array{
     *     outputColumnName: string,
     *     minimumIdentityCount: int<0, 100000>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
