<?php

namespace Sunaoka\Aws\Structures\RAM\DeletePermission;

use Sunaoka\Aws\Structures\Response;

/**
 * @property bool|null $returnValue
 * @property string|null $clientToken
 * @property 'ATTACHABLE'|'UNATTACHABLE'|'DELETING'|'DELETED'|null $permissionStatus
 */
class DeletePermissionResponse extends Response
{
}
