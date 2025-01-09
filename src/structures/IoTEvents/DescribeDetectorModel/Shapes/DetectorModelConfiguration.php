<?php

namespace Sunaoka\Aws\Structures\IoTEvents\DescribeDetectorModel\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $detectorModelName
 * @property string $detectorModelVersion
 * @property string $detectorModelDescription
 * @property string $detectorModelArn
 * @property string $roleArn
 * @property \Aws\Api\DateTimeResult $creationTime
 * @property \Aws\Api\DateTimeResult $lastUpdateTime
 * @property 'ACTIVE'|'ACTIVATING'|'INACTIVE'|'DEPRECATED'|'DRAFT'|'PAUSED'|'FAILED' $status
 * @property string $key
 * @property 'BATCH'|'SERIAL' $evaluationMethod
 */
class DetectorModelConfiguration extends Shape
{
    /**
     * @param array{
     *     detectorModelName?: string,
     *     detectorModelVersion?: string,
     *     detectorModelDescription?: string,
     *     detectorModelArn?: string,
     *     roleArn?: string,
     *     creationTime?: \Aws\Api\DateTimeResult,
     *     lastUpdateTime?: \Aws\Api\DateTimeResult,
     *     status?: 'ACTIVE'|'ACTIVATING'|'INACTIVE'|'DEPRECATED'|'DRAFT'|'PAUSED'|'FAILED',
     *     key?: string,
     *     evaluationMethod?: 'BATCH'|'SERIAL'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
