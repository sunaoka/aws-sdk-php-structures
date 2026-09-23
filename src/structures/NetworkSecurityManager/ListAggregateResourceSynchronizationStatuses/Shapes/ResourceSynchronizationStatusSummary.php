<?php

namespace Sunaoka\Aws\Structures\NetworkSecurityManager\ListAggregateResourceSynchronizationStatuses\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'IN_SYNC'|'OUT_OF_SYNC'|'NOT_APPLICABLE' $synchronizationStatus
 * @property string $accountId
 * @property string $resourceArn
 * @property string|null $deploymentArn
 * @property 'AWS::ApiGateway::Stage'|'AWS::CloudFront::Distribution'|'AWS::EC2::EIP'|'AWS::ElasticLoadBalancingV2::LoadBalancer::application'|'AWS::ElasticLoadBalancing::LoadBalancer'|'AWS::WAFv2::WebACL'|'AWS::Shield::Protection'|'AWS::ShieldRegional::Protection'|null $resourceType
 * @property \Aws\Api\DateTimeResult $updatedAt
 * @property OutOfSyncReasonsView|null $outOfSyncReasons
 * @property RemediationIssuesView|null $remediationIssues
 * @property \Aws\Api\DateTimeResult|null $evaluatedAt
 */
class ResourceSynchronizationStatusSummary extends Shape
{
    /**
     * @param array{
     *     synchronizationStatus: 'IN_SYNC'|'OUT_OF_SYNC'|'NOT_APPLICABLE',
     *     accountId: string,
     *     resourceArn: string,
     *     deploymentArn?: string|null,
     *     resourceType?: 'AWS::ApiGateway::Stage'|'AWS::CloudFront::Distribution'|'AWS::EC2::EIP'|'AWS::ElasticLoadBalancingV2::LoadBalancer::application'|'AWS::ElasticLoadBalancing::LoadBalancer'|'AWS::WAFv2::WebACL'|'AWS::Shield::Protection'|'AWS::ShieldRegional::Protection'|null,
     *     updatedAt: \Aws\Api\DateTimeResult,
     *     outOfSyncReasons?: OutOfSyncReasonsView|null,
     *     remediationIssues?: RemediationIssuesView|null,
     *     evaluatedAt?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
