<?php

namespace Sunaoka\Aws\Structures\ApplicationDiscoveryService\DescribeContinuousExports\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $exportId
 * @property 'START_IN_PROGRESS'|'START_FAILED'|'ACTIVE'|'ERROR'|'STOP_IN_PROGRESS'|'STOP_FAILED'|'INACTIVE' $status
 * @property string $statusDetail
 * @property string $s3Bucket
 * @property \Aws\Api\DateTimeResult $startTime
 * @property \Aws\Api\DateTimeResult $stopTime
 * @property 'AGENT' $dataSource
 * @property array<string, string> $schemaStorageConfig
 */
class ContinuousExportDescription extends Shape
{
    /**
     * @param array{
     *     exportId?: string,
     *     status?: 'START_IN_PROGRESS'|'START_FAILED'|'ACTIVE'|'ERROR'|'STOP_IN_PROGRESS'|'STOP_FAILED'|'INACTIVE',
     *     statusDetail?: string,
     *     s3Bucket?: string,
     *     startTime?: \Aws\Api\DateTimeResult,
     *     stopTime?: \Aws\Api\DateTimeResult,
     *     dataSource?: 'AGENT',
     *     schemaStorageConfig?: array<string, string>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
