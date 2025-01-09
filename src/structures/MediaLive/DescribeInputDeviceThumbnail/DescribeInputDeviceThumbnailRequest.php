<?php

namespace Sunaoka\Aws\Structures\MediaLive\DescribeInputDeviceThumbnail;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $InputDeviceId
 * @property 'image/jpeg' $Accept
 */
class DescribeInputDeviceThumbnailRequest extends Request
{
    /**
     * @param array{
     *     InputDeviceId: string,
     *     Accept: 'image/jpeg'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
