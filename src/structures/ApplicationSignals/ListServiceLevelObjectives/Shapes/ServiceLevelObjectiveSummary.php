<?php

namespace Sunaoka\Aws\Structures\ApplicationSignals\ListServiceLevelObjectives\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Arn
 * @property string $Name
 * @property array<string, string>|null $KeyAttributes
 * @property string|null $OperationName
 * @property \Aws\Api\DateTimeResult|null $CreatedTime
 */
class ServiceLevelObjectiveSummary extends Shape
{
    /**
     * @param array{
     *     Arn: string,
     *     Name: string,
     *     KeyAttributes?: array<string, string>|null,
     *     OperationName?: string|null,
     *     CreatedTime?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
