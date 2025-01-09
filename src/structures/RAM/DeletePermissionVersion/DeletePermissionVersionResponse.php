<?php

namespace Sunaoka\Aws\Structures\RAM\DeletePermissionVersion;

use Sunaoka\Aws\Structures\Response;

/**
 * @property bool $returnValue
 * @property string $clientToken
 * @property 'ATTACHABLE'|'UNATTACHABLE'|'DELETING'|'DELETED' $permissionStatus
 */
class DeletePermissionVersionResponse extends Response
{
}
