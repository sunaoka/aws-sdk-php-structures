<?php

namespace Sunaoka\Aws\Structures\DataZone\CreateProjectProfile;

use Sunaoka\Aws\Structures\Response;

/**
 * @property \Aws\Api\DateTimeResult|null $createdAt
 * @property string $createdBy
 * @property string|null $description
 * @property string $domainId
 * @property string|null $domainUnitId
 * @property list<Shapes\EnvironmentConfiguration>|null $environmentConfigurations
 * @property string $id
 * @property \Aws\Api\DateTimeResult|null $lastUpdatedAt
 * @property string $name
 * @property 'ENABLED'|'DISABLED'|null $status
 */
class CreateProjectProfileResponse extends Response
{
}
