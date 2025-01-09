<?php

namespace Sunaoka\Aws\Structures\ApplicationSignals\ListServiceLevelObjectives\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Arn
 * @property string $Name
 * @property array<string, string> $KeyAttributes
 * @property string $OperationName
 * @property \Aws\Api\DateTimeResult $CreatedTime
 */
class ServiceLevelObjectiveSummary extends Shape
{
    /**
     * @param array{
     *     Arn: string,
     *     Name: string,
     *     KeyAttributes?: array<string, string>,
     *     OperationName?: string,
     *     CreatedTime?: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
