<?php

namespace Sunaoka\Aws\Structures\BCMPricingCalculator\CreateWorkloadEstimate;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $name
 * @property string|null $clientToken
 * @property 'BEFORE_DISCOUNTS'|'AFTER_DISCOUNTS'|'AFTER_DISCOUNTS_AND_COMMITMENTS'|null $rateType
 * @property array<string, string>|null $tags
 */
class CreateWorkloadEstimateRequest extends Request
{
    /**
     * @param array{
     *     name: string,
     *     clientToken?: string|null,
     *     rateType?: 'BEFORE_DISCOUNTS'|'AFTER_DISCOUNTS'|'AFTER_DISCOUNTS_AND_COMMITMENTS'|null,
     *     tags?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
