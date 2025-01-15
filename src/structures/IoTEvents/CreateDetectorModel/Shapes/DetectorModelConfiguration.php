<?php

namespace Sunaoka\Aws\Structures\IoTEvents\CreateDetectorModel\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $detectorModelName
 * @property string|null $detectorModelVersion
 * @property string|null $detectorModelDescription
 * @property string|null $detectorModelArn
 * @property string|null $roleArn
 * @property \Aws\Api\DateTimeResult|null $creationTime
 * @property \Aws\Api\DateTimeResult|null $lastUpdateTime
 * @property 'ACTIVE'|'ACTIVATING'|'INACTIVE'|'DEPRECATED'|'DRAFT'|'PAUSED'|'FAILED'|null $status
 * @property string|null $key
 * @property 'BATCH'|'SERIAL'|null $evaluationMethod
 */
class DetectorModelConfiguration extends Shape
{
    /**
     * @param array{
     *     detectorModelName?: string|null,
     *     detectorModelVersion?: string|null,
     *     detectorModelDescription?: string|null,
     *     detectorModelArn?: string|null,
     *     roleArn?: string|null,
     *     creationTime?: \Aws\Api\DateTimeResult|null,
     *     lastUpdateTime?: \Aws\Api\DateTimeResult|null,
     *     status?: 'ACTIVE'|'ACTIVATING'|'INACTIVE'|'DEPRECATED'|'DRAFT'|'PAUSED'|'FAILED'|null,
     *     key?: string|null,
     *     evaluationMethod?: 'BATCH'|'SERIAL'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
