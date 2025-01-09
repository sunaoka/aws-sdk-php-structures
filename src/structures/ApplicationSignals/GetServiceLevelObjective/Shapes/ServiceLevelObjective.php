<?php

namespace Sunaoka\Aws\Structures\ApplicationSignals\GetServiceLevelObjective\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Arn
 * @property string $Name
 * @property string $Description
 * @property \Aws\Api\DateTimeResult $CreatedTime
 * @property \Aws\Api\DateTimeResult $LastUpdatedTime
 * @property ServiceLevelIndicator $Sli
 * @property RequestBasedServiceLevelIndicator $RequestBasedSli
 * @property 'PeriodBased'|'RequestBased' $EvaluationType
 * @property Goal $Goal
 * @property list<BurnRateConfiguration> $BurnRateConfigurations
 */
class ServiceLevelObjective extends Shape
{
    /**
     * @param array{
     *     Arn: string,
     *     Name: string,
     *     Description?: string,
     *     CreatedTime: \Aws\Api\DateTimeResult,
     *     LastUpdatedTime: \Aws\Api\DateTimeResult,
     *     Sli?: ServiceLevelIndicator,
     *     RequestBasedSli?: RequestBasedServiceLevelIndicator,
     *     EvaluationType?: 'PeriodBased'|'RequestBased',
     *     Goal: Goal,
     *     BurnRateConfigurations?: list<BurnRateConfiguration>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
