<?php

namespace Sunaoka\Aws\Structures\QuickSight\DescribeDashboardSnapshotJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Name
 * @property list<\Aws\Api\DateTimeResult> $Values
 */
class DateTimeParameter extends Shape
{
    /**
     * @param array{
     *     Name: string,
     *     Values: list<\Aws\Api\DateTimeResult>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
