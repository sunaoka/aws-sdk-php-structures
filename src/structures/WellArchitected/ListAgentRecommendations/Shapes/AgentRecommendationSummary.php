<?php

namespace Sunaoka\Aws\Structures\WellArchitected\ListAgentRecommendations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $recommendationArn
 * @property string $profileArn
 * @property string $title
 * @property string $description
 * @property 'RESOURCE'|'ARCHITECTURE'|'APPLICATION' $type
 * @property 'COST_OPTIMIZATION'|'SECURITY'|'RESILIENCE'|'PERFORMANCE'|'OPERATIONAL_EXCELLENCE' $pillar
 * @property 'HIGH'|'MEDIUM'|'LOW' $priority
 * @property 'LARGE'|'MEDIUM'|'SMALL' $effort
 * @property 'ACTIVE'|'SUPPRESSED'|'COMPLETED' $status
 * @property 'OPEN'|'CLOSED' $state
 * @property string|null $updateReason
 * @property 'HIGH'|'MEDIUM'|'LOW' $impact
 * @property Roi $roi
 * @property int|null $numberOfResources
 * @property list<string>|null $awsServices
 * @property list<string>|null $businessUnits
 * @property list<string>|null $applications
 * @property string $createdBy
 * @property \Aws\Api\DateTimeResult $createdAt
 * @property string|null $lastModifiedBy
 * @property \Aws\Api\DateTimeResult|null $lastModifiedAt
 */
class AgentRecommendationSummary extends Shape
{
    /**
     * @param array{
     *     recommendationArn: string,
     *     profileArn: string,
     *     title: string,
     *     description: string,
     *     type: 'RESOURCE'|'ARCHITECTURE'|'APPLICATION',
     *     pillar: 'COST_OPTIMIZATION'|'SECURITY'|'RESILIENCE'|'PERFORMANCE'|'OPERATIONAL_EXCELLENCE',
     *     priority: 'HIGH'|'MEDIUM'|'LOW',
     *     effort: 'LARGE'|'MEDIUM'|'SMALL',
     *     status: 'ACTIVE'|'SUPPRESSED'|'COMPLETED',
     *     state: 'OPEN'|'CLOSED',
     *     updateReason?: string|null,
     *     impact: 'HIGH'|'MEDIUM'|'LOW',
     *     roi: Roi,
     *     numberOfResources?: int|null,
     *     awsServices?: list<string>|null,
     *     businessUnits?: list<string>|null,
     *     applications?: list<string>|null,
     *     createdBy: string,
     *     createdAt: \Aws\Api\DateTimeResult,
     *     lastModifiedBy?: string|null,
     *     lastModifiedAt?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
