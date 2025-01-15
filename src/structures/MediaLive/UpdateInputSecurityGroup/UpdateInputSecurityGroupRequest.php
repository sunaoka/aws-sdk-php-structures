<?php

namespace Sunaoka\Aws\Structures\MediaLive\UpdateInputSecurityGroup;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $InputSecurityGroupId
 * @property array<string, string>|null $Tags
 * @property list<Shapes\InputWhitelistRuleCidr>|null $WhitelistRules
 */
class UpdateInputSecurityGroupRequest extends Request
{
    /**
     * @param array{
     *     InputSecurityGroupId: string,
     *     Tags?: array<string, string>|null,
     *     WhitelistRules?: list<Shapes\InputWhitelistRuleCidr>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
