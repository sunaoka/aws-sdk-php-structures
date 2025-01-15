<?php

namespace Sunaoka\Aws\Structures\LookoutEquipment\ImportDataset;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $DatasetName
 * @property string|null $DatasetArn
 * @property 'CREATED'|'INGESTION_IN_PROGRESS'|'ACTIVE'|'IMPORT_IN_PROGRESS'|null $Status
 * @property string|null $JobId
 */
class ImportDatasetResponse extends Response
{
}
