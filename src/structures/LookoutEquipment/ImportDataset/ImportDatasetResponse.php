<?php

namespace Sunaoka\Aws\Structures\LookoutEquipment\ImportDataset;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $DatasetName
 * @property string $DatasetArn
 * @property 'CREATED'|'INGESTION_IN_PROGRESS'|'ACTIVE'|'IMPORT_IN_PROGRESS' $Status
 * @property string $JobId
 */
class ImportDatasetResponse extends Response
{
}
