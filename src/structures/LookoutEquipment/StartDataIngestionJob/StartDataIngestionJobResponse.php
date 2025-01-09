<?php

namespace Sunaoka\Aws\Structures\LookoutEquipment\StartDataIngestionJob;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $JobId
 * @property 'IN_PROGRESS'|'SUCCESS'|'FAILED'|'IMPORT_IN_PROGRESS' $Status
 */
class StartDataIngestionJobResponse extends Response
{
}
