<?php

namespace Sunaoka\Aws\Structures\SecurityHub\GetFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Arn
 * @property AwsEcrRepositoryImageScanningConfigurationDetails $ImageScanningConfiguration
 * @property string $ImageTagMutability
 * @property AwsEcrRepositoryLifecyclePolicyDetails $LifecyclePolicy
 * @property string $RepositoryName
 * @property string $RepositoryPolicyText
 */
class AwsEcrRepositoryDetails extends Shape
{
    /**
     * @param array{
     *     Arn?: string,
     *     ImageScanningConfiguration?: AwsEcrRepositoryImageScanningConfigurationDetails,
     *     ImageTagMutability?: string,
     *     LifecyclePolicy?: AwsEcrRepositoryLifecyclePolicyDetails,
     *     RepositoryName?: string,
     *     RepositoryPolicyText?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
