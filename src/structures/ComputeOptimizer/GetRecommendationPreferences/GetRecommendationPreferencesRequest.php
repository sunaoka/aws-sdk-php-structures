<?php

namespace Sunaoka\Aws\Structures\ComputeOptimizer\GetRecommendationPreferences;

use Sunaoka\Aws\Structures\Request;

/**
 * @property 'Ec2Instance'|'AutoScalingGroup'|'EbsVolume'|'LambdaFunction'|'NotApplicable'|'EcsService'|'License'|'RdsDBInstance'|'AuroraDBClusterStorage'|'Idle' $resourceType
 * @property Shapes\Scope|null $scope
 * @property string|null $nextToken
 * @property int<0, 1000>|null $maxResults
 */
class GetRecommendationPreferencesRequest extends Request
{
    /**
     * @param array{
     *     resourceType: 'Ec2Instance'|'AutoScalingGroup'|'EbsVolume'|'LambdaFunction'|'NotApplicable'|'EcsService'|'License'|'RdsDBInstance'|'AuroraDBClusterStorage'|'Idle',
     *     scope?: Shapes\Scope|null,
     *     nextToken?: string|null,
     *     maxResults?: int<0, 1000>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
