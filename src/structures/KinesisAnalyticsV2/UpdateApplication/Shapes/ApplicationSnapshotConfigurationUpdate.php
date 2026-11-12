<?php

namespace Sunaoka\Aws\Structures\KinesisAnalyticsV2\UpdateApplication\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool $SnapshotsEnabledUpdate
 * @property 'APPLICATION_SNAPSHOTS_LEGACY'|'ENHANCED_SNAPSHOTS'|null $SnapshotModeUpdate
 */
class ApplicationSnapshotConfigurationUpdate extends Shape
{
    /**
     * @param array{
     *     SnapshotsEnabledUpdate: bool,
     *     SnapshotModeUpdate?: 'APPLICATION_SNAPSHOTS_LEGACY'|'ENHANCED_SNAPSHOTS'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
