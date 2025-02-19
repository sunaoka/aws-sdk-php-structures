<?php

namespace Sunaoka\Aws\Structures\NetworkFirewall\CreateFirewall;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $FirewallName
 * @property string $FirewallPolicyArn
 * @property string|null $VpcId
 * @property list<Shapes\SubnetMapping>|null $SubnetMappings
 * @property bool|null $DeleteProtection
 * @property bool|null $SubnetChangeProtection
 * @property bool|null $FirewallPolicyChangeProtection
 * @property string|null $Description
 * @property list<Shapes\Tag>|null $Tags
 * @property Shapes\EncryptionConfiguration|null $EncryptionConfiguration
 * @property list<'TLS_SNI'|'HTTP_HOST'>|null $EnabledAnalysisTypes
 */
class CreateFirewallRequest extends Request
{
    /**
     * @param array{
     *     FirewallName: string,
     *     FirewallPolicyArn: string,
     *     VpcId?: string|null,
     *     SubnetMappings?: list<Shapes\SubnetMapping>|null,
     *     DeleteProtection?: bool|null,
     *     SubnetChangeProtection?: bool|null,
     *     FirewallPolicyChangeProtection?: bool|null,
     *     Description?: string|null,
     *     Tags?: list<Shapes\Tag>|null,
     *     EncryptionConfiguration?: Shapes\EncryptionConfiguration|null,
     *     EnabledAnalysisTypes?: list<'TLS_SNI'|'HTTP_HOST'>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
