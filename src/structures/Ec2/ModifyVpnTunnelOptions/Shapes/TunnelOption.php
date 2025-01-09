<?php

namespace Sunaoka\Aws\Structures\Ec2\ModifyVpnTunnelOptions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $OutsideIpAddress
 * @property string $TunnelInsideCidr
 * @property string $TunnelInsideIpv6Cidr
 * @property string $PreSharedKey
 * @property int $Phase1LifetimeSeconds
 * @property int $Phase2LifetimeSeconds
 * @property int $RekeyMarginTimeSeconds
 * @property int $RekeyFuzzPercentage
 * @property int $ReplayWindowSize
 * @property int $DpdTimeoutSeconds
 * @property string $DpdTimeoutAction
 * @property list<Phase1EncryptionAlgorithmsListValue> $Phase1EncryptionAlgorithms
 * @property list<Phase2EncryptionAlgorithmsListValue> $Phase2EncryptionAlgorithms
 * @property list<Phase1IntegrityAlgorithmsListValue> $Phase1IntegrityAlgorithms
 * @property list<Phase2IntegrityAlgorithmsListValue> $Phase2IntegrityAlgorithms
 * @property list<Phase1DHGroupNumbersListValue> $Phase1DHGroupNumbers
 * @property list<Phase2DHGroupNumbersListValue> $Phase2DHGroupNumbers
 * @property list<IKEVersionsListValue> $IkeVersions
 * @property string $StartupAction
 * @property VpnTunnelLogOptions $LogOptions
 * @property bool $EnableTunnelLifecycleControl
 */
class TunnelOption extends Shape
{
    /**
     * @param array{
     *     OutsideIpAddress?: string,
     *     TunnelInsideCidr?: string,
     *     TunnelInsideIpv6Cidr?: string,
     *     PreSharedKey?: string,
     *     Phase1LifetimeSeconds?: int,
     *     Phase2LifetimeSeconds?: int,
     *     RekeyMarginTimeSeconds?: int,
     *     RekeyFuzzPercentage?: int,
     *     ReplayWindowSize?: int,
     *     DpdTimeoutSeconds?: int,
     *     DpdTimeoutAction?: string,
     *     Phase1EncryptionAlgorithms?: list<Phase1EncryptionAlgorithmsListValue>,
     *     Phase2EncryptionAlgorithms?: list<Phase2EncryptionAlgorithmsListValue>,
     *     Phase1IntegrityAlgorithms?: list<Phase1IntegrityAlgorithmsListValue>,
     *     Phase2IntegrityAlgorithms?: list<Phase2IntegrityAlgorithmsListValue>,
     *     Phase1DHGroupNumbers?: list<Phase1DHGroupNumbersListValue>,
     *     Phase2DHGroupNumbers?: list<Phase2DHGroupNumbersListValue>,
     *     IkeVersions?: list<IKEVersionsListValue>,
     *     StartupAction?: string,
     *     LogOptions?: VpnTunnelLogOptions,
     *     EnableTunnelLifecycleControl?: bool
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
