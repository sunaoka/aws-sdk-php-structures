<?php

namespace Sunaoka\Aws\Structures\DataZone\GetProjectProfile;

use Sunaoka\Aws\Structures\Response;

/**
 * @property bool|null $allowCustomProjectResourceTags
 * @property \Aws\Api\DateTimeResult|null $createdAt
 * @property string $createdBy
 * @property string|null $description
 * @property string $domainId
 * @property string|null $domainUnitId
 * @property list<Shapes\EnvironmentConfiguration>|null $environmentConfigurations
 * @property string $id
 * @property \Aws\Api\DateTimeResult|null $lastUpdatedAt
 * @property string $name
 * @property list<Shapes\ResourceTagParameter>|null $projectResourceTags
 * @property string|null $projectResourceTagsDescription
 * @property 'ENABLED'|'DISABLED'|null $status
 */
class GetProjectProfileResponse extends Response
{
}
