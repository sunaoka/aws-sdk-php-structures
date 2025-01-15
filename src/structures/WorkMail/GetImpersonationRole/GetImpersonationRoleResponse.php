<?php

namespace Sunaoka\Aws\Structures\WorkMail\GetImpersonationRole;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $ImpersonationRoleId
 * @property string|null $Name
 * @property 'FULL_ACCESS'|'READ_ONLY'|null $Type
 * @property string|null $Description
 * @property list<Shapes\ImpersonationRule>|null $Rules
 * @property \Aws\Api\DateTimeResult|null $DateCreated
 * @property \Aws\Api\DateTimeResult|null $DateModified
 */
class GetImpersonationRoleResponse extends Response
{
}
