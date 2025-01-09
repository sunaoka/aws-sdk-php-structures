<?php

namespace Sunaoka\Aws\Structures\Athena\GetCalculationExecutionStatus\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $DpuExecutionInMillis
 * @property string $Progress
 */
class CalculationStatistics extends Shape
{
    /**
     * @param array{
     *     DpuExecutionInMillis?: int,
     *     Progress?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
