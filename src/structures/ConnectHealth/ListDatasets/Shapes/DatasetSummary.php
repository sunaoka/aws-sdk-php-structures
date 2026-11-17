<?php

namespace Sunaoka\Aws\Structures\ConnectHealth\ListDatasets\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $arn
 * @property string $datasetId
 * @property string $name
 * @property 'MEDICAL_CODING' $type
 * @property 'CREATING'|'ACTIVE'|'CREATE_FAILED'|'DELETING'|'DELETE_FAILED'|'DELETED' $status
 * @property string|null $statusDetails
 * @property \Aws\Api\DateTimeResult $createdAt
 * @property \Aws\Api\DateTimeResult $updatedAt
 */
class DatasetSummary extends Shape
{
    /**
     * @param array{
     *     arn: string,
     *     datasetId: string,
     *     name: string,
     *     type: 'MEDICAL_CODING',
     *     status: 'CREATING'|'ACTIVE'|'CREATE_FAILED'|'DELETING'|'DELETE_FAILED'|'DELETED',
     *     statusDetails?: string|null,
     *     createdAt: \Aws\Api\DateTimeResult,
     *     updatedAt: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
