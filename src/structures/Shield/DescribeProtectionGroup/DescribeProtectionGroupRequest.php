<?php

namespace Sunaoka\Aws\Structures\Shield\DescribeProtectionGroup;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ProtectionGroupId
 */
class DescribeProtectionGroupRequest extends Request
{
    /**
     * @param array{ProtectionGroupId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
