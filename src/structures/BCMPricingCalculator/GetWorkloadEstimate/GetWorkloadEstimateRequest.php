<?php

namespace Sunaoka\Aws\Structures\BCMPricingCalculator\GetWorkloadEstimate;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $identifier
 */
class GetWorkloadEstimateRequest extends Request
{
    /**
     * @param array{identifier: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
