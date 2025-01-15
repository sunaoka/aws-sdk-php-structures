<?php

namespace Sunaoka\Aws\Structures\Ec2\CreateVpnConnection\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $TunnelInsideCidr
 * @property string|null $TunnelInsideIpv6Cidr
 * @property string|null $PreSharedKey
 * @property int|null $Phase1LifetimeSeconds
 * @property int|null $Phase2LifetimeSeconds
 * @property int|null $RekeyMarginTimeSeconds
 * @property int|null $RekeyFuzzPercentage
 * @property int|null $ReplayWindowSize
 * @property int|null $DPDTimeoutSeconds
 * @property string|null $DPDTimeoutAction
 * @property list<Phase1EncryptionAlgorithmsRequestListValue>|null $Phase1EncryptionAlgorithms
 * @property list<Phase2EncryptionAlgorithmsRequestListValue>|null $Phase2EncryptionAlgorithms
 * @property list<Phase1IntegrityAlgorithmsRequestListValue>|null $Phase1IntegrityAlgorithms
 * @property list<Phase2IntegrityAlgorithmsRequestListValue>|null $Phase2IntegrityAlgorithms
 * @property list<Phase1DHGroupNumbersRequestListValue>|null $Phase1DHGroupNumbers
 * @property list<Phase2DHGroupNumbersRequestListValue>|null $Phase2DHGroupNumbers
 * @property list<IKEVersionsRequestListValue>|null $IKEVersions
 * @property string|null $StartupAction
 * @property VpnTunnelLogOptionsSpecification|null $LogOptions
 * @property bool|null $EnableTunnelLifecycleControl
 */
class VpnTunnelOptionsSpecification extends Shape
{
    /**
     * @param array{
     *     TunnelInsideCidr?: string|null,
     *     TunnelInsideIpv6Cidr?: string|null,
     *     PreSharedKey?: string|null,
     *     Phase1LifetimeSeconds?: int|null,
     *     Phase2LifetimeSeconds?: int|null,
     *     RekeyMarginTimeSeconds?: int|null,
     *     RekeyFuzzPercentage?: int|null,
     *     ReplayWindowSize?: int|null,
     *     DPDTimeoutSeconds?: int|null,
     *     DPDTimeoutAction?: string|null,
     *     Phase1EncryptionAlgorithms?: list<Phase1EncryptionAlgorithmsRequestListValue>|null,
     *     Phase2EncryptionAlgorithms?: list<Phase2EncryptionAlgorithmsRequestListValue>|null,
     *     Phase1IntegrityAlgorithms?: list<Phase1IntegrityAlgorithmsRequestListValue>|null,
     *     Phase2IntegrityAlgorithms?: list<Phase2IntegrityAlgorithmsRequestListValue>|null,
     *     Phase1DHGroupNumbers?: list<Phase1DHGroupNumbersRequestListValue>|null,
     *     Phase2DHGroupNumbers?: list<Phase2DHGroupNumbersRequestListValue>|null,
     *     IKEVersions?: list<IKEVersionsRequestListValue>|null,
     *     StartupAction?: string|null,
     *     LogOptions?: VpnTunnelLogOptionsSpecification|null,
     *     EnableTunnelLifecycleControl?: bool|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
