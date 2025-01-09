<?php

namespace Sunaoka\Aws\Structures\BCMPricingCalculator\CreateWorkloadEstimate;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $name
 * @property string $clientToken
 * @property 'BEFORE_DISCOUNTS'|'AFTER_DISCOUNTS' $rateType
 * @property array<string, string> $tags
 */
class CreateWorkloadEstimateRequest extends Request
{
    /**
     * @param array{
     *     name: string,
     *     clientToken?: string,
     *     rateType?: 'BEFORE_DISCOUNTS'|'AFTER_DISCOUNTS',
     *     tags?: array<string, string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
