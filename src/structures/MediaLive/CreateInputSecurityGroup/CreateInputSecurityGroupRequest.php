<?php

namespace Sunaoka\Aws\Structures\MediaLive\CreateInputSecurityGroup;

use Sunaoka\Aws\Structures\Request;

/**
 * @property array<string, string>|null $Tags
 * @property list<Shapes\InputWhitelistRuleCidr>|null $WhitelistRules
 */
class CreateInputSecurityGroupRequest extends Request
{
    /**
     * @param array{
     *     Tags?: array<string, string>|null,
     *     WhitelistRules?: list<Shapes\InputWhitelistRuleCidr>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
