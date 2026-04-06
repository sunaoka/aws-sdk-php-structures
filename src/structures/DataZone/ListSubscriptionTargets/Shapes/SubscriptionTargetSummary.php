<?php

namespace Sunaoka\Aws\Structures\DataZone\ListSubscriptionTargets\Shapes;

use Sunaoka\Aws\Structures\Shape;

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
 * @property list<SubscriptionTargetForm> $subscriptionTargetConfig
 * @property string $provider
 * @property 'AUTOMATIC'|'MANUAL'|null $subscriptionGrantCreationMode
 */
class SubscriptionTargetSummary extends Shape
{
    /**
     * @param array{
     *     id: string,
     *     authorizedPrincipals: list<string>,
     *     domainId: string,
     *     projectId: string,
     *     environmentId: string,
     *     name: string,
     *     type: string,
     *     createdBy: string,
     *     updatedBy?: string|null,
     *     createdAt: \Aws\Api\DateTimeResult,
     *     updatedAt?: \Aws\Api\DateTimeResult|null,
     *     manageAccessRole?: string|null,
     *     applicableAssetTypes: list<string>,
     *     subscriptionTargetConfig: list<SubscriptionTargetForm>,
     *     provider: string,
     *     subscriptionGrantCreationMode?: 'AUTOMATIC'|'MANUAL'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
