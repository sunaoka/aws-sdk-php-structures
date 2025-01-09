<?php

namespace Sunaoka\Aws\Structures\FMS\GetAdminAccount;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $AdminAccount
 * @property 'READY'|'CREATING'|'PENDING_DELETION'|'DELETING'|'DELETED' $RoleStatus
 */
class GetAdminAccountResponse extends Response
{
}
