<?php

namespace Sunaoka\Aws\Structures\Batch\DescribeComputeEnvironments\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'EC2'|'SPOT'|'FARGATE'|'FARGATE_SPOT' $type
 * @property 'BEST_FIT'|'BEST_FIT_PROGRESSIVE'|'SPOT_CAPACITY_OPTIMIZED'|'SPOT_PRICE_CAPACITY_OPTIMIZED'|null $allocationStrategy
 * @property int|null $minvCpus
 * @property int $maxvCpus
 * @property int|null $desiredvCpus
 * @property list<string>|null $instanceTypes
 * @property string|null $imageId
 * @property list<string> $subnets
 * @property list<string>|null $securityGroupIds
 * @property string|null $ec2KeyPair
 * @property string|null $instanceRole
 * @property array<string, string>|null $tags
 * @property string|null $placementGroup
 * @property int|null $bidPercentage
 * @property string|null $spotIamFleetRole
 * @property LaunchTemplateSpecification|null $launchTemplate
 * @property list<Ec2Configuration>|null $ec2Configuration
 */
class ComputeResource extends Shape
{
    /**
     * @param array{
     *     type: 'EC2'|'SPOT'|'FARGATE'|'FARGATE_SPOT',
     *     allocationStrategy?: 'BEST_FIT'|'BEST_FIT_PROGRESSIVE'|'SPOT_CAPACITY_OPTIMIZED'|'SPOT_PRICE_CAPACITY_OPTIMIZED'|null,
     *     minvCpus?: int|null,
     *     maxvCpus: int,
     *     desiredvCpus?: int|null,
     *     instanceTypes?: list<string>|null,
     *     imageId?: string|null,
     *     subnets: list<string>,
     *     securityGroupIds?: list<string>|null,
     *     ec2KeyPair?: string|null,
     *     instanceRole?: string|null,
     *     tags?: array<string, string>|null,
     *     placementGroup?: string|null,
     *     bidPercentage?: int|null,
     *     spotIamFleetRole?: string|null,
     *     launchTemplate?: LaunchTemplateSpecification|null,
     *     ec2Configuration?: list<Ec2Configuration>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
