<?php

namespace Sunaoka\Aws\Structures\RAM\DeletePermissionVersion;

use Sunaoka\Aws\Structures\Response;

/**
 * @property bool|null $returnValue
 * @property string|null $clientToken
 * @property 'ATTACHABLE'|'UNATTACHABLE'|'DELETING'|'DELETED'|'DEPRECATED'|null $permissionStatus
 */
class DeletePermissionVersionResponse extends Response
{
}
