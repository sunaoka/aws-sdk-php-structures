<?php

namespace Sunaoka\Aws\Structures\QuickSight\CreateIngestion;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $Arn
 * @property string $IngestionId
 * @property 'INITIALIZED'|'QUEUED'|'RUNNING'|'FAILED'|'COMPLETED'|'CANCELLED' $IngestionStatus
 * @property string $RequestId
 * @property int $Status
 */
class CreateIngestionResponse extends Response
{
}
