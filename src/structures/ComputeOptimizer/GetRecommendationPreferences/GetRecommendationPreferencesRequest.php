<?php

namespace Sunaoka\Aws\Structures\ComputeOptimizer\GetRecommendationPreferences;

use Sunaoka\Aws\Structures\Request;

/**
 * @property 'Ec2Instance'|'AutoScalingGroup'|'EbsVolume'|'LambdaFunction'|'NotApplicable'|'EcsService'|'License'|'RdsDBInstance'|'Idle' $resourceType
 * @property Shapes\Scope $scope
 * @property string $nextToken
 * @property int $maxResults
 */
class GetRecommendationPreferencesRequest extends Request
{
    /**
     * @param array{
     *     resourceType: 'Ec2Instance'|'AutoScalingGroup'|'EbsVolume'|'LambdaFunction'|'NotApplicable'|'EcsService'|'License'|'RdsDBInstance'|'Idle',
     *     scope?: Shapes\Scope,
     *     nextToken?: string,
     *     maxResults?: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
