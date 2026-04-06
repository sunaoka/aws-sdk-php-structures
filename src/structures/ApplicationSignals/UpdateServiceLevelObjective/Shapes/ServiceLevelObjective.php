<?php

namespace Sunaoka\Aws\Structures\ApplicationSignals\UpdateServiceLevelObjective\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Arn
 * @property string $Name
 * @property string|null $Description
 * @property \Aws\Api\DateTimeResult $CreatedTime
 * @property \Aws\Api\DateTimeResult $LastUpdatedTime
 * @property ServiceLevelIndicator $Sli
 * @property Goal $Goal
 */
class ServiceLevelObjective extends Shape
{
    /**
     * @param array{
     *     Arn: string,
     *     Name: string,
     *     Description?: string|null,
     *     CreatedTime: \Aws\Api\DateTimeResult,
     *     LastUpdatedTime: \Aws\Api\DateTimeResult,
     *     Sli: ServiceLevelIndicator,
     *     Goal: Goal
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
