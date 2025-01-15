<?php

namespace Sunaoka\Aws\Structures\QuickSight\DescribeDashboardSnapshotJobResult\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<SnapshotFile>|null $Files
 * @property list<SnapshotJobS3Result>|null $S3Results
 */
class SnapshotJobResultFileGroup extends Shape
{
    /**
     * @param array{
     *     Files?: list<SnapshotFile>|null,
     *     S3Results?: list<SnapshotJobS3Result>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
