<?php

namespace Sunaoka\Aws\Structures\NetworkFirewall\DescribeFirewall\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $FirewallName
 * @property string|null $FirewallArn
 * @property string $FirewallPolicyArn
 * @property string $VpcId
 * @property list<SubnetMapping> $SubnetMappings
 * @property bool|null $DeleteProtection
 * @property bool|null $SubnetChangeProtection
 * @property bool|null $FirewallPolicyChangeProtection
 * @property string|null $Description
 * @property string $FirewallId
 * @property list<Tag>|null $Tags
 * @property EncryptionConfiguration|null $EncryptionConfiguration
 * @property list<'TLS_SNI'|'HTTP_HOST'>|null $EnabledAnalysisTypes
 */
class Firewall extends Shape
{
    /**
     * @param array{
     *     FirewallName?: string|null,
     *     FirewallArn?: string|null,
     *     FirewallPolicyArn: string,
     *     VpcId: string,
     *     SubnetMappings: list<SubnetMapping>,
     *     DeleteProtection?: bool|null,
     *     SubnetChangeProtection?: bool|null,
     *     FirewallPolicyChangeProtection?: bool|null,
     *     Description?: string|null,
     *     FirewallId: string,
     *     Tags?: list<Tag>|null,
     *     EncryptionConfiguration?: EncryptionConfiguration|null,
     *     EnabledAnalysisTypes?: list<'TLS_SNI'|'HTTP_HOST'>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
