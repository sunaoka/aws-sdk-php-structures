<?php

namespace Sunaoka\Aws\Structures\Billing\RedeemCredits;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $promoCode
 */
class RedeemCreditsRequest extends Request
{
    /**
     * @param array{promoCode: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
