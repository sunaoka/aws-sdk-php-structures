<?php

namespace Sunaoka\Aws\Structures\SesV2\CreateTenant;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $TenantName
 * @property string|null $TenantId
 * @property string|null $TenantArn
 * @property \Aws\Api\DateTimeResult|null $CreatedTimestamp
 * @property list<Shapes\Tag>|null $Tags
 * @property 'ENABLED'|'REINSTATED'|'DISABLED'|null $SendingStatus
 */
class CreateTenantResponse extends Response
{
}
