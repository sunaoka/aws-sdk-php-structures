<?php

namespace Sunaoka\Aws\Structures\KinesisAnalyticsV2\DescribeApplication\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'SKIP_RESTORE_FROM_SNAPSHOT'|'RESTORE_FROM_LATEST_SNAPSHOT'|'RESTORE_FROM_CUSTOM_SNAPSHOT' $ApplicationRestoreType
 * @property string $SnapshotName
 */
class ApplicationRestoreConfiguration extends Shape
{
    /**
     * @param array{
     *     ApplicationRestoreType: 'SKIP_RESTORE_FROM_SNAPSHOT'|'RESTORE_FROM_LATEST_SNAPSHOT'|'RESTORE_FROM_CUSTOM_SNAPSHOT',
     *     SnapshotName?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
