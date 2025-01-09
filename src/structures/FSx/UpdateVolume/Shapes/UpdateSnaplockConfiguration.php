<?php

namespace Sunaoka\Aws\Structures\FSx\UpdateVolume\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool $AuditLogVolume
 * @property AutocommitPeriod $AutocommitPeriod
 * @property 'DISABLED'|'ENABLED'|'PERMANENTLY_DISABLED' $PrivilegedDelete
 * @property SnaplockRetentionPeriod $RetentionPeriod
 * @property bool $VolumeAppendModeEnabled
 */
class UpdateSnaplockConfiguration extends Shape
{
    /**
     * @param array{
     *     AuditLogVolume?: bool,
     *     AutocommitPeriod?: AutocommitPeriod,
     *     PrivilegedDelete?: 'DISABLED'|'ENABLED'|'PERMANENTLY_DISABLED',
     *     RetentionPeriod?: SnaplockRetentionPeriod,
     *     VolumeAppendModeEnabled?: bool
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
