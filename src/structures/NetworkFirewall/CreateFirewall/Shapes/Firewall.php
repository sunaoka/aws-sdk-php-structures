<?php

namespace Sunaoka\Aws\Structures\NetworkFirewall\CreateFirewall\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $FirewallName
 * @property string $FirewallArn
 * @property string $FirewallPolicyArn
 * @property string $VpcId
 * @property list<SubnetMapping> $SubnetMappings
 * @property bool $DeleteProtection
 * @property bool $SubnetChangeProtection
 * @property bool $FirewallPolicyChangeProtection
 * @property string $Description
 * @property string $FirewallId
 * @property list<Tag> $Tags
 * @property EncryptionConfiguration $EncryptionConfiguration
 */
class Firewall extends Shape
{
    /**
     * @param array{
     *     FirewallName?: string,
     *     FirewallArn?: string,
     *     FirewallPolicyArn: string,
     *     VpcId: string,
     *     SubnetMappings: list<SubnetMapping>,
     *     DeleteProtection?: bool,
     *     SubnetChangeProtection?: bool,
     *     FirewallPolicyChangeProtection?: bool,
     *     Description?: string,
     *     FirewallId: string,
     *     Tags?: list<Tag>,
     *     EncryptionConfiguration?: EncryptionConfiguration
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
