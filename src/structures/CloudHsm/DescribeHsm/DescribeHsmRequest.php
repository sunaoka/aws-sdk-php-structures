<?php

namespace Sunaoka\Aws\Structures\CloudHsm\DescribeHsm;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $HsmArn
 * @property string|null $HsmSerialNumber
 */
class DescribeHsmRequest extends Request
{
    /**
     * @param array{
     *     HsmArn?: string|null,
     *     HsmSerialNumber?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
