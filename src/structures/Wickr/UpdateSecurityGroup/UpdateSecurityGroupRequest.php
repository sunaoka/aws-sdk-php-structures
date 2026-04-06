<?php

namespace Sunaoka\Aws\Structures\Wickr\UpdateSecurityGroup;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $networkId
 * @property string $groupId
 * @property string|null $name
 * @property Shapes\SecurityGroupSettings|null $securityGroupSettings
 */
class UpdateSecurityGroupRequest extends Request
{
    /**
     * @param array{
     *     networkId: string,
     *     groupId: string,
     *     name?: string|null,
     *     securityGroupSettings?: Shapes\SecurityGroupSettings|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
