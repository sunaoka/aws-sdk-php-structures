<?php

namespace Sunaoka\Aws\Structures\BCMPricingCalculator\UpdateBillEstimate;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $identifier
 * @property string $name
 * @property \Aws\Api\DateTimeResult $expiresAt
 */
class UpdateBillEstimateRequest extends Request
{
    /**
     * @param array{
     *     identifier: string,
     *     name?: string,
     *     expiresAt?: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
