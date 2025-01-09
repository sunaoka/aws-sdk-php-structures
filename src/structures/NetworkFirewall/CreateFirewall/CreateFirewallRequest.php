<?php

namespace Sunaoka\Aws\Structures\NetworkFirewall\CreateFirewall;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $FirewallName
 * @property string $FirewallPolicyArn
 * @property string $VpcId
 * @property list<Shapes\SubnetMapping> $SubnetMappings
 * @property bool $DeleteProtection
 * @property bool $SubnetChangeProtection
 * @property bool $FirewallPolicyChangeProtection
 * @property string $Description
 * @property list<Shapes\Tag> $Tags
 * @property Shapes\EncryptionConfiguration $EncryptionConfiguration
 */
class CreateFirewallRequest extends Request
{
    /**
     * @param array{
     *     FirewallName: string,
     *     FirewallPolicyArn: string,
     *     VpcId: string,
     *     SubnetMappings: list<Shapes\SubnetMapping>,
     *     DeleteProtection?: bool,
     *     SubnetChangeProtection?: bool,
     *     FirewallPolicyChangeProtection?: bool,
     *     Description?: string,
     *     Tags?: list<Shapes\Tag>,
     *     EncryptionConfiguration?: Shapes\EncryptionConfiguration
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
