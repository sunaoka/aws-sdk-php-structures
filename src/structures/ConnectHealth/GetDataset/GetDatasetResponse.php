<?php

namespace Sunaoka\Aws\Structures\ConnectHealth\GetDataset;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $arn
 * @property string $datasetId
 * @property string $name
 * @property 'MEDICAL_CODING' $type
 * @property Shapes\DatasetConfig $config
 * @property 'CREATING'|'ACTIVE'|'CREATE_FAILED'|'DELETING'|'DELETE_FAILED'|'DELETED' $status
 * @property string|null $statusDetails
 * @property Shapes\DatasetArtifacts|null $artifacts
 * @property \Aws\Api\DateTimeResult $createdAt
 * @property \Aws\Api\DateTimeResult $updatedAt
 */
class GetDatasetResponse extends Response
{
}
