<?php

namespace Sunaoka\Aws\Structures\Wickr\CreateSecurityGroup;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $networkId
 * @property string $name
 * @property Shapes\SecurityGroupSettingsRequest $securityGroupSettings
 * @property string|null $clientToken
 */
class CreateSecurityGroupRequest extends Request
{
    /**
     * @param array{
     *     networkId: string,
     *     name: string,
     *     securityGroupSettings: Shapes\SecurityGroupSettingsRequest,
     *     clientToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
