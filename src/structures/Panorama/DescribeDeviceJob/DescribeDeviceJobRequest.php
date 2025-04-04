<?php

namespace Sunaoka\Aws\Structures\Panorama\DescribeDeviceJob;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $JobId
 */
class DescribeDeviceJobRequest extends Request
{
    /**
     * @param array{JobId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
