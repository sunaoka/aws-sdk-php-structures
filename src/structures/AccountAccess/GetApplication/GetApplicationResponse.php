<?php

namespace Sunaoka\Aws\Structures\AccountAccess\GetApplication;

use Sunaoka\Aws\Structures\Response;

/**
 * @property Shapes\IdentitySourceDetails $identitySource
 * @property 'CREATE_IN_PROGRESS'|'ACTIVE'|'DELETE_IN_PROGRESS'|'CREATE_FAILED'|'DELETE_FAILED' $status
 * @property string|null $tenantId
 * @property \Aws\Api\DateTimeResult $createdAt
 * @property \Aws\Api\DateTimeResult $updatedAt
 * @property array<string, string>|null $tags
 * @property Shapes\ErrorDetails|null $error
 */
class GetApplicationResponse extends Response
{
}
