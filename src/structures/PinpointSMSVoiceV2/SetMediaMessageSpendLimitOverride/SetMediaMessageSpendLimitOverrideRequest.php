<?php

namespace Sunaoka\Aws\Structures\PinpointSMSVoiceV2\SetMediaMessageSpendLimitOverride;

use Sunaoka\Aws\Structures\Request;

/**
 * @property int $MonthlyLimit
 */
class SetMediaMessageSpendLimitOverrideRequest extends Request
{
    /**
     * @param array{MonthlyLimit: int} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
