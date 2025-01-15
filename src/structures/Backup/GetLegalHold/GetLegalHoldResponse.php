<?php

namespace Sunaoka\Aws\Structures\Backup\GetLegalHold;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $Title
 * @property 'CREATING'|'ACTIVE'|'CANCELING'|'CANCELED'|null $Status
 * @property string|null $Description
 * @property string|null $CancelDescription
 * @property string|null $LegalHoldId
 * @property string|null $LegalHoldArn
 * @property \Aws\Api\DateTimeResult|null $CreationDate
 * @property \Aws\Api\DateTimeResult|null $CancellationDate
 * @property \Aws\Api\DateTimeResult|null $RetainRecordUntil
 * @property Shapes\RecoveryPointSelection|null $RecoveryPointSelection
 */
class GetLegalHoldResponse extends Response
{
}
