<?php

namespace Sunaoka\Aws\Structures\ComputeOptimizer\GetRecommendationPreferences;

use Sunaoka\Aws\Structures\Request;

/**
 * @property 'Ec2Instance'|'AutoScalingGroup'|'EbsVolume'|'LambdaFunction'|'NotApplicable'|'EcsService'|'License'|'RdsDBInstance'|'Idle' $resourceType
 * @property Shapes\Scope $scope
 * @property string $nextToken
 * @property int<0, 1000> $maxResults
 */
class GetRecommendationPreferencesRequest extends Request
{
    /**
     * @param array{
     *     resourceType: 'Ec2Instance'|'AutoScalingGroup'|'EbsVolume'|'LambdaFunction'|'NotApplicable'|'EcsService'|'License'|'RdsDBInstance'|'Idle',
     *     scope?: Shapes\Scope,
     *     nextToken?: string,
     *     maxResults?: int<0, 1000>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
