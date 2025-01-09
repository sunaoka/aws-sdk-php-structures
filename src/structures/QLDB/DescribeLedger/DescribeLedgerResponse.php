<?php

namespace Sunaoka\Aws\Structures\QLDB\DescribeLedger;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $Name
 * @property string $Arn
 * @property 'CREATING'|'ACTIVE'|'DELETING'|'DELETED' $State
 * @property \Aws\Api\DateTimeResult $CreationDateTime
 * @property 'ALLOW_ALL'|'STANDARD' $PermissionsMode
 * @property bool $DeletionProtection
 * @property Shapes\LedgerEncryptionDescription $EncryptionDescription
 */
class DescribeLedgerResponse extends Response
{
}
