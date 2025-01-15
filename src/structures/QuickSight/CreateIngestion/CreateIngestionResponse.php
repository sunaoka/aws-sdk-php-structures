<?php

namespace Sunaoka\Aws\Structures\QuickSight\CreateIngestion;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $Arn
 * @property string|null $IngestionId
 * @property 'INITIALIZED'|'QUEUED'|'RUNNING'|'FAILED'|'COMPLETED'|'CANCELLED'|null $IngestionStatus
 * @property string|null $RequestId
 * @property int|null $Status
 */
class CreateIngestionResponse extends Response
{
}
