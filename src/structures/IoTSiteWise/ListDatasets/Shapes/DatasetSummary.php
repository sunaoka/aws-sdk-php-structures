<?php

namespace Sunaoka\Aws\Structures\IoTSiteWise\ListDatasets\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $id
 * @property string $arn
 * @property string $name
 * @property string $description
 * @property \Aws\Api\DateTimeResult $creationDate
 * @property \Aws\Api\DateTimeResult $lastUpdateDate
 * @property DatasetStatus $status
 */
class DatasetSummary extends Shape
{
    /**
     * @param array{
     *     id: string,
     *     arn: string,
     *     name: string,
     *     description: string,
     *     creationDate: \Aws\Api\DateTimeResult,
     *     lastUpdateDate: \Aws\Api\DateTimeResult,
     *     status: DatasetStatus
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
