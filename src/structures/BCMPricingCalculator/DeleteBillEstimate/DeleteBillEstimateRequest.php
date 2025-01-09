<?php

namespace Sunaoka\Aws\Structures\BCMPricingCalculator\DeleteBillEstimate;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $identifier
 */
class DeleteBillEstimateRequest extends Request
{
    /**
     * @param array{identifier: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
