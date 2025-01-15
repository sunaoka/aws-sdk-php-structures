<?php

namespace Sunaoka\Aws\Structures\CleanRoomsML\GetTrainingDataset;

use Sunaoka\Aws\Structures\Response;

/**
 * @property \Aws\Api\DateTimeResult $createTime
 * @property \Aws\Api\DateTimeResult $updateTime
 * @property string $trainingDatasetArn
 * @property string $name
 * @property list<Shapes\Dataset> $trainingData
 * @property 'ACTIVE' $status
 * @property string $roleArn
 * @property array<string, string>|null $tags
 * @property string|null $description
 */
class GetTrainingDatasetResponse extends Response
{
}
