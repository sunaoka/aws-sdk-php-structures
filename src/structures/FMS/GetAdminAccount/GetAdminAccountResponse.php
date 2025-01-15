<?php

namespace Sunaoka\Aws\Structures\FMS\GetAdminAccount;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $AdminAccount
 * @property 'READY'|'CREATING'|'PENDING_DELETION'|'DELETING'|'DELETED'|null $RoleStatus
 */
class GetAdminAccountResponse extends Response
{
}
