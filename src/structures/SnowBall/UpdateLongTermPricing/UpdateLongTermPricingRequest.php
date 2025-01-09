<?php

namespace Sunaoka\Aws\Structures\SnowBall\UpdateLongTermPricing;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $LongTermPricingId
 * @property string $ReplacementJob
 * @property bool $IsLongTermPricingAutoRenew
 */
class UpdateLongTermPricingRequest extends Request
{
    /**
     * @param array{
     *     LongTermPricingId: string,
     *     ReplacementJob?: string,
     *     IsLongTermPricingAutoRenew?: bool
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
