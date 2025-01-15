<?php

namespace Sunaoka\Aws\Structures\ApplicationSignals\GetServiceLevelObjective\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Arn
 * @property string $Name
 * @property string|null $Description
 * @property \Aws\Api\DateTimeResult $CreatedTime
 * @property \Aws\Api\DateTimeResult $LastUpdatedTime
 * @property ServiceLevelIndicator|null $Sli
 * @property RequestBasedServiceLevelIndicator|null $RequestBasedSli
 * @property 'PeriodBased'|'RequestBased'|null $EvaluationType
 * @property Goal $Goal
 * @property list<BurnRateConfiguration>|null $BurnRateConfigurations
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
     *     Sli?: ServiceLevelIndicator|null,
     *     RequestBasedSli?: RequestBasedServiceLevelIndicator|null,
     *     EvaluationType?: 'PeriodBased'|'RequestBased'|null,
     *     Goal: Goal,
     *     BurnRateConfigurations?: list<BurnRateConfiguration>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
