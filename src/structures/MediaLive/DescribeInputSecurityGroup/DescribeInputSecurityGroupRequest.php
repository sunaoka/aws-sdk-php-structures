<?php

namespace Sunaoka\Aws\Structures\MediaLive\DescribeInputSecurityGroup;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $InputSecurityGroupId
 */
class DescribeInputSecurityGroupRequest extends Request
{
    /**
     * @param array{InputSecurityGroupId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
