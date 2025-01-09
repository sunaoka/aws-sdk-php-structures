<?php

namespace Sunaoka\Aws\Structures\LookoutEquipment\CreateDataset;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $DatasetName
 * @property string $DatasetArn
 * @property 'CREATED'|'INGESTION_IN_PROGRESS'|'ACTIVE'|'IMPORT_IN_PROGRESS' $Status
 */
class CreateDatasetResponse extends Response
{
}
