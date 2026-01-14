<?php

namespace Sunaoka\Aws\Structures\DataZone\CreateSubscriptionTarget;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $id
 * @property list<string> $authorizedPrincipals
 * @property string $domainId
 * @property string $projectId
 * @property string $environmentId
 * @property string $name
 * @property string $type
 * @property string $createdBy
 * @property string|null $updatedBy
 * @property \Aws\Api\DateTimeResult $createdAt
 * @property \Aws\Api\DateTimeResult|null $updatedAt
 * @property string|null $manageAccessRole
 * @property list<string> $applicableAssetTypes
 * @property list<Shapes\SubscriptionTargetForm> $subscriptionTargetConfig
 * @property string $provider
 * @property 'AUTOMATIC'|'MANUAL'|null $subscriptionGrantCreationMode
 */
class CreateSubscriptionTargetResponse extends Response
{
}
