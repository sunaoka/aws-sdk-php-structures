<?php

namespace Sunaoka\Aws\Structures\WellArchitected\GetAgentRecommendation;

use Sunaoka\Aws\Structures\Response;

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
 * @property Shapes\Roi $roi
 * @property int|null $numberOfResources
 * @property list<string>|null $awsServices
 * @property list<string>|null $businessUnits
 * @property list<string>|null $applications
 * @property list<string> $impactDetails
 * @property list<Shapes\Insight> $insights
 * @property list<string> $highlights
 * @property Shapes\RemediationSummary $remediationSummary
 * @property list<Shapes\CrossPillarBenefit>|null $crossPillarBenefits
 * @property list<Shapes\TradeOff>|null $tradeOffs
 * @property list<'TRUSTED_ADVISOR'|'COST_EXPLORER'|'CLOUDWATCH'|'WELL_ARCHITECTED_TOOL'|'WELL_ARCHITECTED_AGENT'|'CUSTOMER_IAC'>|null $sources
 * @property list<Shapes\RecommendationGoal>|null $goals
 * @property list<Shapes\Tag>|null $tags
 * @property string $createdBy
 * @property \Aws\Api\DateTimeResult $createdAt
 * @property string|null $lastModifiedBy
 * @property \Aws\Api\DateTimeResult|null $lastModifiedAt
 * @property list<Shapes\AgentRecommendationRemediation>|null $remediations
 */
class GetAgentRecommendationResponse extends Response
{
}
