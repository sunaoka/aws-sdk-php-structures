<?php

namespace Sunaoka\Aws\Structures\MediaLive\ClaimDevice;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $Id
 */
class ClaimDeviceRequest extends Request
{
    /**
     * @param array{Id?: string|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
