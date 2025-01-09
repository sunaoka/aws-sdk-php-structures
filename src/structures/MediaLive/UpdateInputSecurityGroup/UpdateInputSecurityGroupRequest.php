<?php

namespace Sunaoka\Aws\Structures\MediaLive\UpdateInputSecurityGroup;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $InputSecurityGroupId
 * @property array<string, string> $Tags
 * @property list<Shapes\InputWhitelistRuleCidr> $WhitelistRules
 */
class UpdateInputSecurityGroupRequest extends Request
{
    /**
     * @param array{
     *     InputSecurityGroupId: string,
     *     Tags?: array<string, string>,
     *     WhitelistRules?: list<Shapes\InputWhitelistRuleCidr>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
