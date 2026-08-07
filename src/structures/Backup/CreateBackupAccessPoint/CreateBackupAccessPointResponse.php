<?php

namespace Sunaoka\Aws\Structures\Backup\CreateBackupAccessPoint;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $AccessPointArn
 * @property 'AVAILABLE'|'CREATING'|'DELETING'|'DISASSOCIATED'|'DISASSOCIATING'|'EXPIRED'|'FAILED' $Status
 */
class CreateBackupAccessPointResponse extends Response
{
}
