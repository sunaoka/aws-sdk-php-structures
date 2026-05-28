<?php

namespace Sunaoka\Aws\Structures\Resiliencehubv2\ListServices\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $serviceArn
 * @property string $name
 * @property list<AssociatedSystem>|null $associatedSystems
 * @property list<string>|null $regions
 * @property string|null $policyArn
 * @property 'NOT_STARTED'|'PENDING'|'IN_PROGRESS'|'FAILED'|'SUCCESS'|null $assessmentStatus
 * @property int|null $openFindingsCount
 * @property int|null $resolvedFindingsCount
 * @property DependencyDiscoveryConfig|null $dependencyDiscovery
 * @property Achievability|null $achievability
 * @property string|null $organizationId
 * @property string|null $ouId
 * @property string|null $accountId
 * @property \Aws\Api\DateTimeResult|null $createdAt
 * @property \Aws\Api\DateTimeResult|null $updatedAt
 */
class ServiceSummary extends Shape
{
    /**
     * @param array{
     *     serviceArn: string,
     *     name: string,
     *     associatedSystems?: list<AssociatedSystem>|null,
     *     regions?: list<string>|null,
     *     policyArn?: string|null,
     *     assessmentStatus?: 'NOT_STARTED'|'PENDING'|'IN_PROGRESS'|'FAILED'|'SUCCESS'|null,
     *     openFindingsCount?: int|null,
     *     resolvedFindingsCount?: int|null,
     *     dependencyDiscovery?: DependencyDiscoveryConfig|null,
     *     achievability?: Achievability|null,
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
