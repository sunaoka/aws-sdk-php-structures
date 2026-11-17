<?php

namespace Sunaoka\Aws\Structures\ConnectHealth\DeleteDataset;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $arn
 * @property string $datasetId
 * @property 'CREATING'|'ACTIVE'|'CREATE_FAILED'|'DELETING'|'DELETE_FAILED'|'DELETED' $status
 */
class DeleteDatasetResponse extends Response
{
}
