<?php

namespace Sunaoka\Aws\Structures\Backup\CreateLegalHold;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $Title
 * @property 'CREATING'|'ACTIVE'|'CANCELING'|'CANCELED'|null $Status
 * @property string|null $Description
 * @property string|null $LegalHoldId
 * @property string|null $LegalHoldArn
 * @property \Aws\Api\DateTimeResult|null $CreationDate
 * @property Shapes\RecoveryPointSelection|null $RecoveryPointSelection
 */
class CreateLegalHoldResponse extends Response
{
}
