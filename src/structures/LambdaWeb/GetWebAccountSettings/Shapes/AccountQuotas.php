<?php

namespace Sunaoka\Aws\Structures\LambdaWeb\GetWebAccountSettings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<0, max> $maxTotalArmVCpus
 * @property int<0, max> $maxTotalRateLimit
 * @property int<0, max> $maxRevisionsPerFunction
 * @property int<0, max> $maxEndpointsPerFunction
 */
class AccountQuotas extends Shape
{
    /**
     * @param array{
     *     maxTotalArmVCpus: int<0, max>,
     *     maxTotalRateLimit: int<0, max>,
     *     maxRevisionsPerFunction: int<0, max>,
     *     maxEndpointsPerFunction: int<0, max>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
