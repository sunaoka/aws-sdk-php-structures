<?php

namespace Sunaoka\Aws\Structures\DataZone\UpdateEnvironmentProfile;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $awsAccountId
 * @property string $awsAccountRegion
 * @property \Aws\Api\DateTimeResult $createdAt
 * @property string $createdBy
 * @property string $description
 * @property string $domainId
 * @property string $environmentBlueprintId
 * @property string $id
 * @property string $name
 * @property string $projectId
 * @property \Aws\Api\DateTimeResult $updatedAt
 * @property list<Shapes\CustomParameter> $userParameters
 */
class UpdateEnvironmentProfileResponse extends Response
{
}
