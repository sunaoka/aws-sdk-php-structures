<?php

namespace Sunaoka\Aws\Structures\SageMaker\DescribeFeatureMetadata;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $FeatureGroupName
 * @property string $FeatureName
 */
class DescribeFeatureMetadataRequest extends Request
{
    /**
     * @param array{
     *     FeatureGroupName: string,
     *     FeatureName: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
