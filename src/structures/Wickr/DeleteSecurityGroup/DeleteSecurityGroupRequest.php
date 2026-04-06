<?php

namespace Sunaoka\Aws\Structures\Wickr\DeleteSecurityGroup;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $networkId
 * @property string $groupId
 */
class DeleteSecurityGroupRequest extends Request
{
    /**
     * @param array{
     *     networkId: string,
     *     groupId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
