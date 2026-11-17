<?php

namespace Sunaoka\Aws\Structures\ConnectHealth\CreateDataset;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $arn
 * @property string $datasetId
 * @property 'MEDICAL_CODING' $type
 * @property 'CREATING'|'ACTIVE'|'CREATE_FAILED'|'DELETING'|'DELETE_FAILED'|'DELETED' $status
 * @property \Aws\Api\DateTimeResult $createdAt
 */
class CreateDatasetResponse extends Response
{
}
