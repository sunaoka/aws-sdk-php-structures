<?php

namespace Sunaoka\Aws\Structures\DataZone\CreateEnvironmentProfile;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $awsAccountId
 * @property string|null $awsAccountRegion
 * @property \Aws\Api\DateTimeResult|null $createdAt
 * @property string $createdBy
 * @property string|null $description
 * @property string $domainId
 * @property string $environmentBlueprintId
 * @property string $id
 * @property string $name
 * @property string|null $projectId
 * @property \Aws\Api\DateTimeResult|null $updatedAt
 * @property list<Shapes\CustomParameter>|null $userParameters
 */
class CreateEnvironmentProfileResponse extends Response
{
}
