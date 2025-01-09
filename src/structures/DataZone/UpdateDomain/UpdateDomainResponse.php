<?php

namespace Sunaoka\Aws\Structures\DataZone\UpdateDomain;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $description
 * @property string $domainExecutionRole
 * @property string $id
 * @property \Aws\Api\DateTimeResult $lastUpdatedAt
 * @property string $name
 * @property string $rootDomainUnitId
 * @property string $serviceRole
 * @property Shapes\SingleSignOn $singleSignOn
 */
class UpdateDomainResponse extends Response
{
}
