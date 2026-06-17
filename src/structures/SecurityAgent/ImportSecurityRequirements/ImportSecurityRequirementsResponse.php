<?php

namespace Sunaoka\Aws\Structures\SecurityAgent\ImportSecurityRequirements;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $packId
 * @property 'PENDING'|'IN_PROGRESS'|'FAILED'|'COMPLETED' $importStatus
 */
class ImportSecurityRequirementsResponse extends Response
{
}
