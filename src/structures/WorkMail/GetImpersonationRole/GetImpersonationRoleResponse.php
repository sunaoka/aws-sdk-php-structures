<?php

namespace Sunaoka\Aws\Structures\WorkMail\GetImpersonationRole;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $ImpersonationRoleId
 * @property string $Name
 * @property 'FULL_ACCESS'|'READ_ONLY' $Type
 * @property string $Description
 * @property list<Shapes\ImpersonationRule> $Rules
 * @property \Aws\Api\DateTimeResult $DateCreated
 * @property \Aws\Api\DateTimeResult $DateModified
 */
class GetImpersonationRoleResponse extends Response
{
}
