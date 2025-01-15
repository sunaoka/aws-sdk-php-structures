<?php

namespace Sunaoka\Aws\Structures\SecurityHub\BatchImportFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int|null $DpdTimeoutSeconds
 * @property list<string>|null $IkeVersions
 * @property string|null $OutsideIpAddress
 * @property list<int>|null $Phase1DhGroupNumbers
 * @property list<string>|null $Phase1EncryptionAlgorithms
 * @property list<string>|null $Phase1IntegrityAlgorithms
 * @property int|null $Phase1LifetimeSeconds
 * @property list<int>|null $Phase2DhGroupNumbers
 * @property list<string>|null $Phase2EncryptionAlgorithms
 * @property list<string>|null $Phase2IntegrityAlgorithms
 * @property int|null $Phase2LifetimeSeconds
 * @property string|null $PreSharedKey
 * @property int|null $RekeyFuzzPercentage
 * @property int|null $RekeyMarginTimeSeconds
 * @property int|null $ReplayWindowSize
 * @property string|null $TunnelInsideCidr
 */
class AwsEc2VpnConnectionOptionsTunnelOptionsDetails extends Shape
{
    /**
     * @param array{
     *     DpdTimeoutSeconds?: int|null,
     *     IkeVersions?: list<string>|null,
     *     OutsideIpAddress?: string|null,
     *     Phase1DhGroupNumbers?: list<int>|null,
     *     Phase1EncryptionAlgorithms?: list<string>|null,
     *     Phase1IntegrityAlgorithms?: list<string>|null,
     *     Phase1LifetimeSeconds?: int|null,
     *     Phase2DhGroupNumbers?: list<int>|null,
     *     Phase2EncryptionAlgorithms?: list<string>|null,
     *     Phase2IntegrityAlgorithms?: list<string>|null,
     *     Phase2LifetimeSeconds?: int|null,
     *     PreSharedKey?: string|null,
     *     RekeyFuzzPercentage?: int|null,
     *     RekeyMarginTimeSeconds?: int|null,
     *     ReplayWindowSize?: int|null,
     *     TunnelInsideCidr?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
