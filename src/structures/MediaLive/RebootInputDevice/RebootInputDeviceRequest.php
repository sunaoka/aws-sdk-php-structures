<?php

namespace Sunaoka\Aws\Structures\MediaLive\RebootInputDevice;

use Sunaoka\Aws\Structures\Request;

/**
 * @property 'NO'|'YES'|null $Force
 * @property string $InputDeviceId
 */
class RebootInputDeviceRequest extends Request
{
    /**
     * @param array{
     *     Force?: 'NO'|'YES'|null,
     *     InputDeviceId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
