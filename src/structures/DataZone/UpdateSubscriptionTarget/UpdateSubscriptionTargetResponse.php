<?php

namespace Sunaoka\Aws\Structures\DataZone\UpdateSubscriptionTarget;

use Sunaoka\Aws\Structures\Response;

/**
 * @property list<string> $applicableAssetTypes
 * @property list<string> $authorizedPrincipals
 * @property \Aws\Api\DateTimeResult $createdAt
 * @property string $createdBy
 * @property string $domainId
 * @property string $environmentId
 * @property string $id
 * @property string|null $manageAccessRole
 * @property string $name
 * @property string $projectId
 * @property string $provider
 * @property list<Shapes\SubscriptionTargetForm> $subscriptionTargetConfig
 * @property string $type
 * @property \Aws\Api\DateTimeResult|null $updatedAt
 * @property string|null $updatedBy
 */
class UpdateSubscriptionTargetResponse extends Response
{
}
