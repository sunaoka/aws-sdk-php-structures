<?php

namespace Sunaoka\Aws\Structures\QLDB\UpdateLedger;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $Name
 * @property string|null $Arn
 * @property 'CREATING'|'ACTIVE'|'DELETING'|'DELETED'|null $State
 * @property \Aws\Api\DateTimeResult|null $CreationDateTime
 * @property bool|null $DeletionProtection
 * @property Shapes\LedgerEncryptionDescription|null $EncryptionDescription
 */
class UpdateLedgerResponse extends Response
{
}
