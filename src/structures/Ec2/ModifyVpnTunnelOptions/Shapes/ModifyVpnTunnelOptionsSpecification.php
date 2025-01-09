<?php

namespace Sunaoka\Aws\Structures\Ec2\ModifyVpnTunnelOptions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $TunnelInsideCidr
 * @property string $TunnelInsideIpv6Cidr
 * @property string $PreSharedKey
 * @property int $Phase1LifetimeSeconds
 * @property int $Phase2LifetimeSeconds
 * @property int $RekeyMarginTimeSeconds
 * @property int $RekeyFuzzPercentage
 * @property int $ReplayWindowSize
 * @property int $DPDTimeoutSeconds
 * @property string $DPDTimeoutAction
 * @property list<Phase1EncryptionAlgorithmsRequestListValue> $Phase1EncryptionAlgorithms
 * @property list<Phase2EncryptionAlgorithmsRequestListValue> $Phase2EncryptionAlgorithms
 * @property list<Phase1IntegrityAlgorithmsRequestListValue> $Phase1IntegrityAlgorithms
 * @property list<Phase2IntegrityAlgorithmsRequestListValue> $Phase2IntegrityAlgorithms
 * @property list<Phase1DHGroupNumbersRequestListValue> $Phase1DHGroupNumbers
 * @property list<Phase2DHGroupNumbersRequestListValue> $Phase2DHGroupNumbers
 * @property list<IKEVersionsRequestListValue> $IKEVersions
 * @property string $StartupAction
 * @property VpnTunnelLogOptionsSpecification $LogOptions
 * @property bool $EnableTunnelLifecycleControl
 */
class ModifyVpnTunnelOptionsSpecification extends Shape
{
    /**
     * @param array{
     *     TunnelInsideCidr?: string,
     *     TunnelInsideIpv6Cidr?: string,
     *     PreSharedKey?: string,
     *     Phase1LifetimeSeconds?: int,
     *     Phase2LifetimeSeconds?: int,
     *     RekeyMarginTimeSeconds?: int,
     *     RekeyFuzzPercentage?: int,
     *     ReplayWindowSize?: int,
     *     DPDTimeoutSeconds?: int,
     *     DPDTimeoutAction?: string,
     *     Phase1EncryptionAlgorithms?: list<Phase1EncryptionAlgorithmsRequestListValue>,
     *     Phase2EncryptionAlgorithms?: list<Phase2EncryptionAlgorithmsRequestListValue>,
     *     Phase1IntegrityAlgorithms?: list<Phase1IntegrityAlgorithmsRequestListValue>,
     *     Phase2IntegrityAlgorithms?: list<Phase2IntegrityAlgorithmsRequestListValue>,
     *     Phase1DHGroupNumbers?: list<Phase1DHGroupNumbersRequestListValue>,
     *     Phase2DHGroupNumbers?: list<Phase2DHGroupNumbersRequestListValue>,
     *     IKEVersions?: list<IKEVersionsRequestListValue>,
     *     StartupAction?: string,
     *     LogOptions?: VpnTunnelLogOptionsSpecification,
     *     EnableTunnelLifecycleControl?: bool
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
