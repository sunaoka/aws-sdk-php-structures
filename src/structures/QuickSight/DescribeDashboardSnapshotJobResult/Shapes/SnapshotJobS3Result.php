<?php

namespace Sunaoka\Aws\Structures\QuickSight\DescribeDashboardSnapshotJobResult\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property SnapshotS3DestinationConfiguration $S3DestinationConfiguration
 * @property string $S3Uri
 * @property list<SnapshotJobResultErrorInfo> $ErrorInfo
 */
class SnapshotJobS3Result extends Shape
{
    /**
     * @param array{
     *     S3DestinationConfiguration?: SnapshotS3DestinationConfiguration,
     *     S3Uri?: string,
     *     ErrorInfo?: list<SnapshotJobResultErrorInfo>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
