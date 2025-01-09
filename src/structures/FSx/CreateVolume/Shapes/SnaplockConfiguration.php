<?php

namespace Sunaoka\Aws\Structures\FSx\CreateVolume\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool $AuditLogVolume
 * @property AutocommitPeriod $AutocommitPeriod
 * @property 'DISABLED'|'ENABLED'|'PERMANENTLY_DISABLED' $PrivilegedDelete
 * @property SnaplockRetentionPeriod $RetentionPeriod
 * @property 'COMPLIANCE'|'ENTERPRISE' $SnaplockType
 * @property bool $VolumeAppendModeEnabled
 */
class SnaplockConfiguration extends Shape
{
    /**
     * @param array{
     *     AuditLogVolume?: bool,
     *     AutocommitPeriod?: AutocommitPeriod,
     *     PrivilegedDelete?: 'DISABLED'|'ENABLED'|'PERMANENTLY_DISABLED',
     *     RetentionPeriod?: SnaplockRetentionPeriod,
     *     SnaplockType?: 'COMPLIANCE'|'ENTERPRISE',
     *     VolumeAppendModeEnabled?: bool
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
