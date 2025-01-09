<?php

namespace Sunaoka\Aws\Structures\Pinpoint\GetJourneyDateRangeKpi\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Key
 * @property string $Type
 * @property string $Value
 */
class ResultRowValue extends Shape
{
    /**
     * @param array{
     *     Key: string,
     *     Type: string,
     *     Value: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
