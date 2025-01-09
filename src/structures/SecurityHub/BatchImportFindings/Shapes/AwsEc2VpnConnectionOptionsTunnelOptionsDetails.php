<?php

namespace Sunaoka\Aws\Structures\SecurityHub\BatchImportFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $DpdTimeoutSeconds
 * @property list<string> $IkeVersions
 * @property string $OutsideIpAddress
 * @property list<int> $Phase1DhGroupNumbers
 * @property list<string> $Phase1EncryptionAlgorithms
 * @property list<string> $Phase1IntegrityAlgorithms
 * @property int $Phase1LifetimeSeconds
 * @property list<int> $Phase2DhGroupNumbers
 * @property list<string> $Phase2EncryptionAlgorithms
 * @property list<string> $Phase2IntegrityAlgorithms
 * @property int $Phase2LifetimeSeconds
 * @property string $PreSharedKey
 * @property int $RekeyFuzzPercentage
 * @property int $RekeyMarginTimeSeconds
 * @property int $ReplayWindowSize
 * @property string $TunnelInsideCidr
 */
class AwsEc2VpnConnectionOptionsTunnelOptionsDetails extends Shape
{
    /**
     * @param array{
     *     DpdTimeoutSeconds?: int,
     *     IkeVersions?: list<string>,
     *     OutsideIpAddress?: string,
     *     Phase1DhGroupNumbers?: list<int>,
     *     Phase1EncryptionAlgorithms?: list<string>,
     *     Phase1IntegrityAlgorithms?: list<string>,
     *     Phase1LifetimeSeconds?: int,
     *     Phase2DhGroupNumbers?: list<int>,
     *     Phase2EncryptionAlgorithms?: list<string>,
     *     Phase2IntegrityAlgorithms?: list<string>,
     *     Phase2LifetimeSeconds?: int,
     *     PreSharedKey?: string,
     *     RekeyFuzzPercentage?: int,
     *     RekeyMarginTimeSeconds?: int,
     *     ReplayWindowSize?: int,
     *     TunnelInsideCidr?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
