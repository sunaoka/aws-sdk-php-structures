<?php

namespace Sunaoka\Aws\Structures\SnowBall\UpdateLongTermPricing;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $LongTermPricingId
 * @property string|null $ReplacementJob
 * @property bool|null $IsLongTermPricingAutoRenew
 */
class UpdateLongTermPricingRequest extends Request
{
    /**
     * @param array{
     *     LongTermPricingId: string,
     *     ReplacementJob?: string|null,
     *     IsLongTermPricingAutoRenew?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
