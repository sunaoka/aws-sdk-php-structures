<?php

namespace Sunaoka\Aws\Structures\BCMPricingCalculator\UpdateWorkloadEstimate;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $identifier
 * @property string|null $name
 * @property \Aws\Api\DateTimeResult|null $expiresAt
 */
class UpdateWorkloadEstimateRequest extends Request
{
    /**
     * @param array{
     *     identifier: string,
     *     name?: string|null,
     *     expiresAt?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
