<?php

namespace Sunaoka\Aws\Structures\Backup\GetLegalHold;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $Title
 * @property 'CREATING'|'ACTIVE'|'CANCELING'|'CANCELED' $Status
 * @property string $Description
 * @property string $CancelDescription
 * @property string $LegalHoldId
 * @property string $LegalHoldArn
 * @property \Aws\Api\DateTimeResult $CreationDate
 * @property \Aws\Api\DateTimeResult $CancellationDate
 * @property \Aws\Api\DateTimeResult $RetainRecordUntil
 * @property Shapes\RecoveryPointSelection $RecoveryPointSelection
 */
class GetLegalHoldResponse extends Response
{
}
