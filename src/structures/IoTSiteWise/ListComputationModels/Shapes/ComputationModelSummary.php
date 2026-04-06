<?php

namespace Sunaoka\Aws\Structures\IoTSiteWise\ListComputationModels\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $id
 * @property string $arn
 * @property string $name
 * @property string|null $description
 * @property 'ANOMALY_DETECTION' $type
 * @property \Aws\Api\DateTimeResult $creationDate
 * @property \Aws\Api\DateTimeResult $lastUpdateDate
 * @property ComputationModelStatus $status
 * @property string $version
 */
class ComputationModelSummary extends Shape
{
    /**
     * @param array{
     *     id: string,
     *     arn: string,
     *     name: string,
     *     description?: string|null,
     *     type: 'ANOMALY_DETECTION',
     *     creationDate: \Aws\Api\DateTimeResult,
     *     lastUpdateDate: \Aws\Api\DateTimeResult,
     *     status: ComputationModelStatus,
     *     version: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
