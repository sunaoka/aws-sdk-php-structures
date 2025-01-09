<?php

namespace Sunaoka\Aws\Structures\MediaLive\DeleteInputSecurityGroup;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $InputSecurityGroupId
 */
class DeleteInputSecurityGroupRequest extends Request
{
    /**
     * @param array{InputSecurityGroupId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
