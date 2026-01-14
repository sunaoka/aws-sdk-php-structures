<?php

namespace Sunaoka\Aws\Structures\DataZone\UpdateProjectProfile;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $domainId
 * @property string $id
 * @property string $name
 * @property string|null $description
 * @property 'ENABLED'|'DISABLED'|null $status
 * @property list<Shapes\ResourceTagParameter>|null $projectResourceTags
 * @property bool|null $allowCustomProjectResourceTags
 * @property string|null $projectResourceTagsDescription
 * @property list<Shapes\EnvironmentConfiguration>|null $environmentConfigurations
 * @property string $createdBy
 * @property \Aws\Api\DateTimeResult|null $createdAt
 * @property \Aws\Api\DateTimeResult|null $lastUpdatedAt
 * @property string|null $domainUnitId
 */
class UpdateProjectProfileResponse extends Response
{
}
