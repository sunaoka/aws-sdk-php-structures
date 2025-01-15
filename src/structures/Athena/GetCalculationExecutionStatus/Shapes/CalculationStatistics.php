<?php

namespace Sunaoka\Aws\Structures\Athena\GetCalculationExecutionStatus\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int|null $DpuExecutionInMillis
 * @property string|null $Progress
 */
class CalculationStatistics extends Shape
{
    /**
     * @param array{
     *     DpuExecutionInMillis?: int|null,
     *     Progress?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
