<?php

namespace Sunaoka\Aws\Structures\Resiliencehubv2\UpdateService\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $serviceArn
 * @property string $name
 * @property string|null $description
 * @property list<AssociatedSystem>|null $associatedSystems
 * @property string|null $policyArn
 * @property list<string>|null $regions
 * @property PermissionModel|null $permissionModel
 * @property DependencyDiscoveryConfig|null $dependencyDiscovery
 * @property EffectivePolicyValues|null $effectivePolicyValues
 * @property Achievability|null $achievability
 * @property ServiceReportConfiguration|null $reportConfiguration
 * @property string|null $kmsKeyId
 * @property array<string, string>|null $tags
 * @property AssessmentCost|null $estimatedAssessmentCost
 * @property ResourceDiscoveryStatus|null $resourceDiscovery
 * @property 'NOT_STARTED'|'PENDING'|'IN_PROGRESS'|'FAILED'|'SUCCESS'|null $assessmentStatus
 * @property bool|null $rerunAssessment
 * @property int|null $openFindingsCount
 * @property int|null $resolvedFindingsCount
 * @property string|null $organizationId
 * @property string|null $ouId
 * @property string|null $accountId
 * @property \Aws\Api\DateTimeResult|null $createdAt
 * @property \Aws\Api\DateTimeResult|null $updatedAt
 */
class Service extends Shape
{
    /**
     * @param array{
     *     serviceArn: string,
     *     name: string,
     *     description?: string|null,
     *     associatedSystems?: list<AssociatedSystem>|null,
     *     policyArn?: string|null,
     *     regions?: list<string>|null,
     *     permissionModel?: PermissionModel|null,
     *     dependencyDiscovery?: DependencyDiscoveryConfig|null,
     *     effectivePolicyValues?: EffectivePolicyValues|null,
     *     achievability?: Achievability|null,
     *     reportConfiguration?: ServiceReportConfiguration|null,
     *     kmsKeyId?: string|null,
     *     tags?: array<string, string>|null,
     *     estimatedAssessmentCost?: AssessmentCost|null,
     *     resourceDiscovery?: ResourceDiscoveryStatus|null,
     *     assessmentStatus?: 'NOT_STARTED'|'PENDING'|'IN_PROGRESS'|'FAILED'|'SUCCESS'|null,
     *     rerunAssessment?: bool|null,
     *     openFindingsCount?: int|null,
     *     resolvedFindingsCount?: int|null,
     *     organizationId?: string|null,
     *     ouId?: string|null,
     *     accountId?: string|null,
     *     createdAt?: \Aws\Api\DateTimeResult|null,
     *     updatedAt?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
