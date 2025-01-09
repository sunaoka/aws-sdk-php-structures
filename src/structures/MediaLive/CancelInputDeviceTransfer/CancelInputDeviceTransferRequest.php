<?php

namespace Sunaoka\Aws\Structures\MediaLive\CancelInputDeviceTransfer;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $InputDeviceId
 */
class CancelInputDeviceTransferRequest extends Request
{
    /**
     * @param array{InputDeviceId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
