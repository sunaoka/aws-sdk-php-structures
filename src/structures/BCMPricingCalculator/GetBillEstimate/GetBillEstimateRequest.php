<?php

namespace Sunaoka\Aws\Structures\BCMPricingCalculator\GetBillEstimate;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $identifier
 */
class GetBillEstimateRequest extends Request
{
    /**
     * @param array{identifier: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
