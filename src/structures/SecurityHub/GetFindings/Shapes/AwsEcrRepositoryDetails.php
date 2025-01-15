<?php

namespace Sunaoka\Aws\Structures\SecurityHub\GetFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Arn
 * @property AwsEcrRepositoryImageScanningConfigurationDetails|null $ImageScanningConfiguration
 * @property string|null $ImageTagMutability
 * @property AwsEcrRepositoryLifecyclePolicyDetails|null $LifecyclePolicy
 * @property string|null $RepositoryName
 * @property string|null $RepositoryPolicyText
 */
class AwsEcrRepositoryDetails extends Shape
{
    /**
     * @param array{
     *     Arn?: string|null,
     *     ImageScanningConfiguration?: AwsEcrRepositoryImageScanningConfigurationDetails|null,
     *     ImageTagMutability?: string|null,
     *     LifecyclePolicy?: AwsEcrRepositoryLifecyclePolicyDetails|null,
     *     RepositoryName?: string|null,
     *     RepositoryPolicyText?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
