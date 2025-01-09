<?php

namespace Sunaoka\Aws\Structures\IoTEvents\ListDetectorModelVersions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $detectorModelName
 * @property string $detectorModelVersion
 * @property string $detectorModelArn
 * @property string $roleArn
 * @property \Aws\Api\DateTimeResult $creationTime
 * @property \Aws\Api\DateTimeResult $lastUpdateTime
 * @property 'ACTIVE'|'ACTIVATING'|'INACTIVE'|'DEPRECATED'|'DRAFT'|'PAUSED'|'FAILED' $status
 * @property 'BATCH'|'SERIAL' $evaluationMethod
 */
class DetectorModelVersionSummary extends Shape
{
    /**
     * @param array{
     *     detectorModelName?: string,
     *     detectorModelVersion?: string,
     *     detectorModelArn?: string,
     *     roleArn?: string,
     *     creationTime?: \Aws\Api\DateTimeResult,
     *     lastUpdateTime?: \Aws\Api\DateTimeResult,
     *     status?: 'ACTIVE'|'ACTIVATING'|'INACTIVE'|'DEPRECATED'|'DRAFT'|'PAUSED'|'FAILED',
     *     evaluationMethod?: 'BATCH'|'SERIAL'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
