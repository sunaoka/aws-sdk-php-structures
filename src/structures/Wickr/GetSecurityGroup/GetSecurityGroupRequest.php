<?php

namespace Sunaoka\Aws\Structures\Wickr\GetSecurityGroup;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $networkId
 * @property string $groupId
 */
class GetSecurityGroupRequest extends Request
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
