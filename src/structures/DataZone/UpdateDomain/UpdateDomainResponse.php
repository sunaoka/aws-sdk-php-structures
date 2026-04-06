<?php

namespace Sunaoka\Aws\Structures\DataZone\UpdateDomain;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $description
 * @property string|null $domainExecutionRole
 * @property string $id
 * @property \Aws\Api\DateTimeResult|null $lastUpdatedAt
 * @property string|null $name
 * @property string|null $rootDomainUnitId
 * @property string|null $serviceRole
 * @property Shapes\SingleSignOn|null $singleSignOn
 */
class UpdateDomainResponse extends Response
{
}
