<?php

namespace Sunaoka\Aws\Structures\DataZone\UpdateEnvironmentProfile;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $id
 * @property string $domainId
 * @property string|null $awsAccountId
 * @property string|null $awsAccountRegion
 * @property string $createdBy
 * @property \Aws\Api\DateTimeResult|null $createdAt
 * @property \Aws\Api\DateTimeResult|null $updatedAt
 * @property string $name
 * @property string|null $description
 * @property string $environmentBlueprintId
 * @property string|null $projectId
 * @property list<Shapes\CustomParameter>|null $userParameters
 */
class UpdateEnvironmentProfileResponse extends Response
{
}
