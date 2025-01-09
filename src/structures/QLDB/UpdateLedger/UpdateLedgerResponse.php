<?php

namespace Sunaoka\Aws\Structures\QLDB\UpdateLedger;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $Name
 * @property string $Arn
 * @property 'CREATING'|'ACTIVE'|'DELETING'|'DELETED' $State
 * @property \Aws\Api\DateTimeResult $CreationDateTime
 * @property bool $DeletionProtection
 * @property Shapes\LedgerEncryptionDescription $EncryptionDescription
 */
class UpdateLedgerResponse extends Response
{
}
