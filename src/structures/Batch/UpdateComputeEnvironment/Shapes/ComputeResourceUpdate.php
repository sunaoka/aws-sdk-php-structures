<?php

namespace Sunaoka\Aws\Structures\Batch\UpdateComputeEnvironment\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $minvCpus
 * @property int $maxvCpus
 * @property int $desiredvCpus
 * @property list<string> $subnets
 * @property list<string> $securityGroupIds
 * @property 'BEST_FIT_PROGRESSIVE'|'SPOT_CAPACITY_OPTIMIZED'|'SPOT_PRICE_CAPACITY_OPTIMIZED' $allocationStrategy
 * @property list<string> $instanceTypes
 * @property string $ec2KeyPair
 * @property string $instanceRole
 * @property array<string, string> $tags
 * @property string $placementGroup
 * @property int $bidPercentage
 * @property LaunchTemplateSpecification $launchTemplate
 * @property list<Ec2Configuration> $ec2Configuration
 * @property bool $updateToLatestImageVersion
 * @property 'EC2'|'SPOT'|'FARGATE'|'FARGATE_SPOT' $type
 * @property string $imageId
 */
class ComputeResourceUpdate extends Shape
{
    /**
     * @param array{
     *     minvCpus?: int,
     *     maxvCpus?: int,
     *     desiredvCpus?: int,
     *     subnets?: list<string>,
     *     securityGroupIds?: list<string>,
     *     allocationStrategy?: 'BEST_FIT_PROGRESSIVE'|'SPOT_CAPACITY_OPTIMIZED'|'SPOT_PRICE_CAPACITY_OPTIMIZED',
     *     instanceTypes?: list<string>,
     *     ec2KeyPair?: string,
     *     instanceRole?: string,
     *     tags?: array<string, string>,
     *     placementGroup?: string,
     *     bidPercentage?: int,
     *     launchTemplate?: LaunchTemplateSpecification,
     *     ec2Configuration?: list<Ec2Configuration>,
     *     updateToLatestImageVersion?: bool,
     *     type?: 'EC2'|'SPOT'|'FARGATE'|'FARGATE_SPOT',
     *     imageId?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
