<?php

namespace Sunaoka\Aws\Structures\MediaLive\CreateInputSecurityGroup;

use Sunaoka\Aws\Structures\Request;

/**
 * @property array<string, string> $Tags
 * @property list<Shapes\InputWhitelistRuleCidr> $WhitelistRules
 */
class CreateInputSecurityGroupRequest extends Request
{
    /**
     * @param array{
     *     Tags?: array<string, string>,
     *     WhitelistRules?: list<Shapes\InputWhitelistRuleCidr>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
