<?php

namespace Sunaoka\Aws\Structures\ARCRegionSwitch\GetPlanInRegion\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<1, max>|null $timeoutMinutes
 * @property list<Lambdas> $lambdas
 * @property float $retryIntervalMinutes
 * @property 'activatingRegion'|'deactivatingRegion' $regionToRun
 * @property LambdaUngraceful|null $ungraceful
 */
class CustomActionLambdaConfiguration extends Shape
{
    /**
     * @param array{
     *     timeoutMinutes?: int<1, max>|null,
     *     lambdas: list<Lambdas>,
     *     retryIntervalMinutes: float,
     *     regionToRun: 'activatingRegion'|'deactivatingRegion',
     *     ungraceful?: LambdaUngraceful|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
