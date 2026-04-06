<?php

namespace Sunaoka\Aws\Structures\PinpointSMSVoiceV2\SetMediaMessageSpendLimitOverride;

use Sunaoka\Aws\Structures\Request;

/**
 * @property int<0, 1000000000> $MonthlyLimit
 */
class SetMediaMessageSpendLimitOverrideRequest extends Request
{
    /**
     * @param array{MonthlyLimit: int<0, 1000000000>} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
