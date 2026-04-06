<?php

namespace Sunaoka\Aws\Structures\QLDB\DescribeLedger;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $Name
 * @property string|null $Arn
 * @property 'CREATING'|'ACTIVE'|'DELETING'|'DELETED'|null $State
 * @property \Aws\Api\DateTimeResult|null $CreationDateTime
 * @property 'ALLOW_ALL'|'STANDARD'|null $PermissionsMode
 * @property bool|null $DeletionProtection
 * @property Shapes\LedgerEncryptionDescription|null $EncryptionDescription
 */
class DescribeLedgerResponse extends Response
{
}
