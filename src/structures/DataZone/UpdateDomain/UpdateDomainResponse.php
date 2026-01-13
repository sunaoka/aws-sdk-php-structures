<?php

namespace Sunaoka\Aws\Structures\DataZone\UpdateDomain;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $id
 * @property string|null $rootDomainUnitId
 * @property string|null $description
 * @property Shapes\SingleSignOn|null $singleSignOn
 * @property string|null $domainExecutionRole
 * @property string|null $serviceRole
 * @property string|null $name
 * @property \Aws\Api\DateTimeResult|null $lastUpdatedAt
 */
class UpdateDomainResponse extends Response
{
}
