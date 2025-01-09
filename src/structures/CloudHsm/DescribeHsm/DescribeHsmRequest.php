<?php

namespace Sunaoka\Aws\Structures\CloudHsm\DescribeHsm;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $HsmArn
 * @property string $HsmSerialNumber
 */
class DescribeHsmRequest extends Request
{
    /**
     * @param array{
     *     HsmArn?: string,
     *     HsmSerialNumber?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
