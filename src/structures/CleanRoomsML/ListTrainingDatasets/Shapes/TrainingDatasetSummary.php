<?php

namespace Sunaoka\Aws\Structures\CleanRoomsML\ListTrainingDatasets\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property \Aws\Api\DateTimeResult $createTime
 * @property \Aws\Api\DateTimeResult $updateTime
 * @property string $trainingDatasetArn
 * @property string $name
 * @property 'ACTIVE' $status
 * @property string|null $description
 */
class TrainingDatasetSummary extends Shape
{
    /**
     * @param array{
     *     createTime: \Aws\Api\DateTimeResult,
     *     updateTime: \Aws\Api\DateTimeResult,
     *     trainingDatasetArn: string,
     *     name: string,
     *     status: 'ACTIVE',
     *     description?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
