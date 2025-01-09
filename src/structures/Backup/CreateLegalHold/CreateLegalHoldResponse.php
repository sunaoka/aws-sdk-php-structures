<?php

namespace Sunaoka\Aws\Structures\Backup\CreateLegalHold;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $Title
 * @property 'CREATING'|'ACTIVE'|'CANCELING'|'CANCELED' $Status
 * @property string $Description
 * @property string $LegalHoldId
 * @property string $LegalHoldArn
 * @property \Aws\Api\DateTimeResult $CreationDate
 * @property Shapes\RecoveryPointSelection $RecoveryPointSelection
 */
class CreateLegalHoldResponse extends Response
{
}
