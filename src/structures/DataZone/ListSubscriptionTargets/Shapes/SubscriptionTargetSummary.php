<?php

namespace Sunaoka\Aws\Structures\DataZone\ListSubscriptionTargets\Shapes;

use Sunaoka\Aws\Structures\Shape;

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
 * @property list<SubscriptionTargetForm> $subscriptionTargetConfig
 * @property string $type
 * @property \Aws\Api\DateTimeResult|null $updatedAt
 * @property string|null $updatedBy
 */
class SubscriptionTargetSummary extends Shape
{
    /**
     * @param array{
     *     applicableAssetTypes: list<string>,
     *     authorizedPrincipals: list<string>,
     *     createdAt: \Aws\Api\DateTimeResult,
     *     createdBy: string,
     *     domainId: string,
     *     environmentId: string,
     *     id: string,
     *     manageAccessRole?: string|null,
     *     name: string,
     *     projectId: string,
     *     provider: string,
     *     subscriptionTargetConfig: list<SubscriptionTargetForm>,
     *     type: string,
     *     updatedAt?: \Aws\Api\DateTimeResult|null,
     *     updatedBy?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
