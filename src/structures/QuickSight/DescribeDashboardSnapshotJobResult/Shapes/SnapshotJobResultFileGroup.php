<?php

namespace Sunaoka\Aws\Structures\QuickSight\DescribeDashboardSnapshotJobResult\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<SnapshotFile> $Files
 * @property list<SnapshotJobS3Result> $S3Results
 */
class SnapshotJobResultFileGroup extends Shape
{
    /**
     * @param array{
     *     Files?: list<SnapshotFile>,
     *     S3Results?: list<SnapshotJobS3Result>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
