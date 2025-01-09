<?php

namespace Sunaoka\Aws\Structures\QLDB\CreateLedger;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $Name
 * @property string $Arn
 * @property 'CREATING'|'ACTIVE'|'DELETING'|'DELETED' $State
 * @property \Aws\Api\DateTimeResult $CreationDateTime
 * @property 'ALLOW_ALL'|'STANDARD' $PermissionsMode
 * @property bool $DeletionProtection
 * @property string $KmsKeyArn
 */
class CreateLedgerResponse extends Response
{
}
