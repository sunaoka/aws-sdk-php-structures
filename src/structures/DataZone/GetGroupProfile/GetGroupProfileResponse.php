<?php

namespace Sunaoka\Aws\Structures\DataZone\GetGroupProfile;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $domainId
 * @property string|null $id
 * @property 'ASSIGNED'|'NOT_ASSIGNED'|null $status
 * @property string|null $groupName
 * @property string|null $rolePrincipalArn
 * @property string|null $rolePrincipalId
 */
class GetGroupProfileResponse extends Response
{
}
