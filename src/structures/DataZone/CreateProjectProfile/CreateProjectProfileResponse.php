<?php

namespace Sunaoka\Aws\Structures\DataZone\CreateProjectProfile;

use Sunaoka\Aws\Structures\Response;

/**
 * @property \Aws\Api\DateTimeResult $createdAt
 * @property string $createdBy
 * @property string $description
 * @property string $domainId
 * @property string $domainUnitId
 * @property list<Shapes\EnvironmentConfiguration> $environmentConfigurations
 * @property string $id
 * @property \Aws\Api\DateTimeResult $lastUpdatedAt
 * @property string $name
 * @property 'ENABLED'|'DISABLED' $status
 */
class CreateProjectProfileResponse extends Response
{
}
