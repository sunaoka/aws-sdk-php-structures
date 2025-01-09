<?php

namespace Sunaoka\Aws\Structures\MediaLive\AcceptInputDeviceTransfer;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $InputDeviceId
 */
class AcceptInputDeviceTransferRequest extends Request
{
    /**
     * @param array{InputDeviceId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
