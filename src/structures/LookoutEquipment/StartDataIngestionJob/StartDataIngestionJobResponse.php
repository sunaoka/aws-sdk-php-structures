<?php

namespace Sunaoka\Aws\Structures\LookoutEquipment\StartDataIngestionJob;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $JobId
 * @property 'IN_PROGRESS'|'SUCCESS'|'FAILED'|'IMPORT_IN_PROGRESS'|null $Status
 */
class StartDataIngestionJobResponse extends Response
{
}
