<?php

namespace Sunaoka\Aws\Structures\IoTEvents\ListDetectorModelVersions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $detectorModelName
 * @property string|null $detectorModelVersion
 * @property string|null $detectorModelArn
 * @property string|null $roleArn
 * @property \Aws\Api\DateTimeResult|null $creationTime
 * @property \Aws\Api\DateTimeResult|null $lastUpdateTime
 * @property 'ACTIVE'|'ACTIVATING'|'INACTIVE'|'DEPRECATED'|'DRAFT'|'PAUSED'|'FAILED'|null $status
 * @property 'BATCH'|'SERIAL'|null $evaluationMethod
 */
class DetectorModelVersionSummary extends Shape
{
    /**
     * @param array{
     *     detectorModelName?: string|null,
     *     detectorModelVersion?: string|null,
     *     detectorModelArn?: string|null,
     *     roleArn?: string|null,
     *     creationTime?: \Aws\Api\DateTimeResult|null,
     *     lastUpdateTime?: \Aws\Api\DateTimeResult|null,
     *     status?: 'ACTIVE'|'ACTIVATING'|'INACTIVE'|'DEPRECATED'|'DRAFT'|'PAUSED'|'FAILED'|null,
     *     evaluationMethod?: 'BATCH'|'SERIAL'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
