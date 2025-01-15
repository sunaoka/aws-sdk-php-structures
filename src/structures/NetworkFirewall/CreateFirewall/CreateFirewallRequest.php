<?php

namespace Sunaoka\Aws\Structures\NetworkFirewall\CreateFirewall;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $FirewallName
 * @property string $FirewallPolicyArn
 * @property string $VpcId
 * @property list<Shapes\SubnetMapping> $SubnetMappings
 * @property bool|null $DeleteProtection
 * @property bool|null $SubnetChangeProtection
 * @property bool|null $FirewallPolicyChangeProtection
 * @property string|null $Description
 * @property list<Shapes\Tag>|null $Tags
 * @property Shapes\EncryptionConfiguration|null $EncryptionConfiguration
 */
class CreateFirewallRequest extends Request
{
    /**
     * @param array{
     *     FirewallName: string,
     *     FirewallPolicyArn: string,
     *     VpcId: string,
     *     SubnetMappings: list<Shapes\SubnetMapping>,
     *     DeleteProtection?: bool|null,
     *     SubnetChangeProtection?: bool|null,
     *     FirewallPolicyChangeProtection?: bool|null,
     *     Description?: string|null,
     *     Tags?: list<Shapes\Tag>|null,
     *     EncryptionConfiguration?: Shapes\EncryptionConfiguration|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
