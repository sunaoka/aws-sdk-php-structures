<?php

namespace Sunaoka\Aws\Structures\Batch\CreateComputeEnvironment\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'EC2'|'SPOT'|'FARGATE'|'FARGATE_SPOT' $type
 * @property 'BEST_FIT'|'BEST_FIT_PROGRESSIVE'|'SPOT_CAPACITY_OPTIMIZED'|'SPOT_PRICE_CAPACITY_OPTIMIZED' $allocationStrategy
 * @property int $minvCpus
 * @property int $maxvCpus
 * @property int $desiredvCpus
 * @property list<string> $instanceTypes
 * @property string $imageId
 * @property list<string> $subnets
 * @property list<string> $securityGroupIds
 * @property string $ec2KeyPair
 * @property string $instanceRole
 * @property array<string, string> $tags
 * @property string $placementGroup
 * @property int $bidPercentage
 * @property string $spotIamFleetRole
 * @property LaunchTemplateSpecification $launchTemplate
 * @property list<Ec2Configuration> $ec2Configuration
 */
class ComputeResource extends Shape
{
    /**
     * @param array{
     *     type: 'EC2'|'SPOT'|'FARGATE'|'FARGATE_SPOT',
     *     allocationStrategy?: 'BEST_FIT'|'BEST_FIT_PROGRESSIVE'|'SPOT_CAPACITY_OPTIMIZED'|'SPOT_PRICE_CAPACITY_OPTIMIZED',
     *     minvCpus?: int,
     *     maxvCpus: int,
     *     desiredvCpus?: int,
     *     instanceTypes?: list<string>,
     *     imageId?: string,
     *     subnets: list<string>,
     *     securityGroupIds?: list<string>,
     *     ec2KeyPair?: string,
     *     instanceRole?: string,
     *     tags?: array<string, string>,
     *     placementGroup?: string,
     *     bidPercentage?: int,
     *     spotIamFleetRole?: string,
     *     launchTemplate?: LaunchTemplateSpecification,
     *     ec2Configuration?: list<Ec2Configuration>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
