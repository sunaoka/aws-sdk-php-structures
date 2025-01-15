<?php

namespace Sunaoka\Aws\Structures\ApplicationDiscoveryService\DescribeContinuousExports\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $exportId
 * @property 'START_IN_PROGRESS'|'START_FAILED'|'ACTIVE'|'ERROR'|'STOP_IN_PROGRESS'|'STOP_FAILED'|'INACTIVE'|null $status
 * @property string|null $statusDetail
 * @property string|null $s3Bucket
 * @property \Aws\Api\DateTimeResult|null $startTime
 * @property \Aws\Api\DateTimeResult|null $stopTime
 * @property 'AGENT'|null $dataSource
 * @property array<string, string>|null $schemaStorageConfig
 */
class ContinuousExportDescription extends Shape
{
    /**
     * @param array{
     *     exportId?: string|null,
     *     status?: 'START_IN_PROGRESS'|'START_FAILED'|'ACTIVE'|'ERROR'|'STOP_IN_PROGRESS'|'STOP_FAILED'|'INACTIVE'|null,
     *     statusDetail?: string|null,
     *     s3Bucket?: string|null,
     *     startTime?: \Aws\Api\DateTimeResult|null,
     *     stopTime?: \Aws\Api\DateTimeResult|null,
     *     dataSource?: 'AGENT'|null,
     *     schemaStorageConfig?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
