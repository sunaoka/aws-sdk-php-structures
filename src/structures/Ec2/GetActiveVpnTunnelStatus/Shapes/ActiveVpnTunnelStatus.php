<?php

namespace Sunaoka\Aws\Structures\Ec2\GetActiveVpnTunnelStatus\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Phase1EncryptionAlgorithm
 * @property string|null $Phase2EncryptionAlgorithm
 * @property string|null $Phase1IntegrityAlgorithm
 * @property string|null $Phase2IntegrityAlgorithm
 * @property int|null $Phase1DHGroup
 * @property int|null $Phase2DHGroup
 * @property string|null $IkeVersion
 * @property 'available'|'pending'|'failed'|null $ProvisioningStatus
 * @property string|null $ProvisioningStatusReason
 */
class ActiveVpnTunnelStatus extends Shape
{
    /**
     * @param array{
     *     Phase1EncryptionAlgorithm?: string|null,
     *     Phase2EncryptionAlgorithm?: string|null,
     *     Phase1IntegrityAlgorithm?: string|null,
     *     Phase2IntegrityAlgorithm?: string|null,
     *     Phase1DHGroup?: int|null,
     *     Phase2DHGroup?: int|null,
     *     IkeVersion?: string|null,
     *     ProvisioningStatus?: 'available'|'pending'|'failed'|null,
     *     ProvisioningStatusReason?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
