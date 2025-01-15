<?php

namespace Sunaoka\Aws\Structures\LookoutEquipment\CreateDataset;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $DatasetName
 * @property string|null $DatasetArn
 * @property 'CREATED'|'INGESTION_IN_PROGRESS'|'ACTIVE'|'IMPORT_IN_PROGRESS'|null $Status
 */
class CreateDatasetResponse extends Response
{
}
