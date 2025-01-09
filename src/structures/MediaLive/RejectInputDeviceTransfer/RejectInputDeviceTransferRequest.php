<?php

namespace Sunaoka\Aws\Structures\MediaLive\RejectInputDeviceTransfer;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $InputDeviceId
 */
class RejectInputDeviceTransferRequest extends Request
{
    /**
     * @param array{InputDeviceId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
