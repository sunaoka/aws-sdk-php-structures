<?php

namespace Sunaoka\Aws\Structures\CloudHsm\DescribeHapg;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $HapgArn
 */
class DescribeHapgRequest extends Request
{
    /**
     * @param array{HapgArn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
