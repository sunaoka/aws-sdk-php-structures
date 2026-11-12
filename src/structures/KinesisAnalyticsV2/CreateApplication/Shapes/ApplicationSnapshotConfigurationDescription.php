<?php

namespace Sunaoka\Aws\Structures\KinesisAnalyticsV2\CreateApplication\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool $SnapshotsEnabled
 * @property 'APPLICATION_SNAPSHOTS_LEGACY'|'ENHANCED_SNAPSHOTS'|null $SnapshotMode
 */
class ApplicationSnapshotConfigurationDescription extends Shape
{
    /**
     * @param array{
     *     SnapshotsEnabled: bool,
     *     SnapshotMode?: 'APPLICATION_SNAPSHOTS_LEGACY'|'ENHANCED_SNAPSHOTS'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
