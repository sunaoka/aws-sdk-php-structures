<?php

namespace Sunaoka\Aws\Structures\PinpointSMSVoiceV2\SetVoiceMessageSpendLimitOverride;

use Sunaoka\Aws\Structures\Request;

/**
 * @property int $MonthlyLimit
 */
class SetVoiceMessageSpendLimitOverrideRequest extends Request
{
    /**
     * @param array{MonthlyLimit: int} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
