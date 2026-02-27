<?php

namespace Sunaoka\Aws\Structures\Batch\UpdateComputeEnvironment\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int|null $minvCpus
 * @property int|null $maxvCpus
 * @property int|null $desiredvCpus
 * @property list<string>|null $subnets
 * @property list<string>|null $securityGroupIds
 * @property 'BEST_FIT_PROGRESSIVE'|'SPOT_CAPACITY_OPTIMIZED'|'SPOT_PRICE_CAPACITY_OPTIMIZED'|null $allocationStrategy
 * @property list<string>|null $instanceTypes
 * @property string|null $ec2KeyPair
 * @property string|null $instanceRole
 * @property array<string, string>|null $tags
 * @property string|null $placementGroup
 * @property int|null $bidPercentage
 * @property LaunchTemplateSpecification|null $launchTemplate
 * @property list<Ec2Configuration>|null $ec2Configuration
 * @property bool|null $updateToLatestImageVersion
 * @property 'EC2'|'SPOT'|'FARGATE'|'FARGATE_SPOT'|null $type
 * @property string|null $imageId
 * @property ComputeScalingPolicy|null $scalingPolicy
 */
class ComputeResourceUpdate extends Shape
{
    /**
     * @param array{
     *     minvCpus?: int|null,
     *     maxvCpus?: int|null,
     *     desiredvCpus?: int|null,
     *     subnets?: list<string>|null,
     *     securityGroupIds?: list<string>|null,
     *     allocationStrategy?: 'BEST_FIT_PROGRESSIVE'|'SPOT_CAPACITY_OPTIMIZED'|'SPOT_PRICE_CAPACITY_OPTIMIZED'|null,
     *     instanceTypes?: list<string>|null,
     *     ec2KeyPair?: string|null,
     *     instanceRole?: string|null,
     *     tags?: array<string, string>|null,
     *     placementGroup?: string|null,
     *     bidPercentage?: int|null,
     *     launchTemplate?: LaunchTemplateSpecification|null,
     *     ec2Configuration?: list<Ec2Configuration>|null,
     *     updateToLatestImageVersion?: bool|null,
     *     type?: 'EC2'|'SPOT'|'FARGATE'|'FARGATE_SPOT'|null,
     *     imageId?: string|null,
     *     scalingPolicy?: ComputeScalingPolicy|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
