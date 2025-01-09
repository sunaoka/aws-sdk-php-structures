<?php

namespace Sunaoka\Aws\Structures\ApplicationSignals\BatchGetServiceLevelObjectiveBudgetReport\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Name
 * @property string $Arn
 * @property string $ErrorCode
 * @property string $ErrorMessage
 */
class ServiceLevelObjectiveBudgetReportError extends Shape
{
    /**
     * @param array{
     *     Name: string,
     *     Arn: string,
     *     ErrorCode: string,
     *     ErrorMessage: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
