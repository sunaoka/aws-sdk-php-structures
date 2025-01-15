<?php

namespace Sunaoka\Aws\Structures\AppSync\GetSchemaCreationStatus;

use Sunaoka\Aws\Structures\Response;

/**
 * @property 'PROCESSING'|'ACTIVE'|'DELETING'|'FAILED'|'SUCCESS'|'NOT_APPLICABLE'|null $status
 * @property string|null $details
 */
class GetSchemaCreationStatusResponse extends Response
{
}
