<?php

namespace Sunaoka\Aws\Structures\KinesisAnalyticsV2\DescribeApplicationVersion\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'SKIP_RESTORE_FROM_SNAPSHOT'|'RESTORE_FROM_LATEST_SNAPSHOT'|'RESTORE_FROM_CUSTOM_SNAPSHOT' $ApplicationRestoreType
 * @property string|null $SnapshotName
 */
class ApplicationRestoreConfiguration extends Shape
{
    /**
     * @param array{
     *     ApplicationRestoreType: 'SKIP_RESTORE_FROM_SNAPSHOT'|'RESTORE_FROM_LATEST_SNAPSHOT'|'RESTORE_FROM_CUSTOM_SNAPSHOT',
     *     SnapshotName?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
