<?php

namespace Sunaoka\Aws\Structures\QuickSight\DescribeDashboardSnapshotJobResult\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property SnapshotS3DestinationConfiguration|null $S3DestinationConfiguration
 * @property string|null $S3Uri
 * @property list<SnapshotJobResultErrorInfo>|null $ErrorInfo
 */
class SnapshotJobS3Result extends Shape
{
    /**
     * @param array{
     *     S3DestinationConfiguration?: SnapshotS3DestinationConfiguration|null,
     *     S3Uri?: string|null,
     *     ErrorInfo?: list<SnapshotJobResultErrorInfo>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
