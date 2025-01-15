<?php

namespace Sunaoka\Aws\Structures\Ec2\ModifyVpnTunnelOptions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $OutsideIpAddress
 * @property string|null $TunnelInsideCidr
 * @property string|null $TunnelInsideIpv6Cidr
 * @property string|null $PreSharedKey
 * @property int|null $Phase1LifetimeSeconds
 * @property int|null $Phase2LifetimeSeconds
 * @property int|null $RekeyMarginTimeSeconds
 * @property int|null $RekeyFuzzPercentage
 * @property int|null $ReplayWindowSize
 * @property int|null $DpdTimeoutSeconds
 * @property string|null $DpdTimeoutAction
 * @property list<Phase1EncryptionAlgorithmsListValue>|null $Phase1EncryptionAlgorithms
 * @property list<Phase2EncryptionAlgorithmsListValue>|null $Phase2EncryptionAlgorithms
 * @property list<Phase1IntegrityAlgorithmsListValue>|null $Phase1IntegrityAlgorithms
 * @property list<Phase2IntegrityAlgorithmsListValue>|null $Phase2IntegrityAlgorithms
 * @property list<Phase1DHGroupNumbersListValue>|null $Phase1DHGroupNumbers
 * @property list<Phase2DHGroupNumbersListValue>|null $Phase2DHGroupNumbers
 * @property list<IKEVersionsListValue>|null $IkeVersions
 * @property string|null $StartupAction
 * @property VpnTunnelLogOptions|null $LogOptions
 * @property bool|null $EnableTunnelLifecycleControl
 */
class TunnelOption extends Shape
{
    /**
     * @param array{
     *     OutsideIpAddress?: string|null,
     *     TunnelInsideCidr?: string|null,
     *     TunnelInsideIpv6Cidr?: string|null,
     *     PreSharedKey?: string|null,
     *     Phase1LifetimeSeconds?: int|null,
     *     Phase2LifetimeSeconds?: int|null,
     *     RekeyMarginTimeSeconds?: int|null,
     *     RekeyFuzzPercentage?: int|null,
     *     ReplayWindowSize?: int|null,
     *     DpdTimeoutSeconds?: int|null,
     *     DpdTimeoutAction?: string|null,
     *     Phase1EncryptionAlgorithms?: list<Phase1EncryptionAlgorithmsListValue>|null,
     *     Phase2EncryptionAlgorithms?: list<Phase2EncryptionAlgorithmsListValue>|null,
     *     Phase1IntegrityAlgorithms?: list<Phase1IntegrityAlgorithmsListValue>|null,
     *     Phase2IntegrityAlgorithms?: list<Phase2IntegrityAlgorithmsListValue>|null,
     *     Phase1DHGroupNumbers?: list<Phase1DHGroupNumbersListValue>|null,
     *     Phase2DHGroupNumbers?: list<Phase2DHGroupNumbersListValue>|null,
     *     IkeVersions?: list<IKEVersionsListValue>|null,
     *     StartupAction?: string|null,
     *     LogOptions?: VpnTunnelLogOptions|null,
     *     EnableTunnelLifecycleControl?: bool|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
