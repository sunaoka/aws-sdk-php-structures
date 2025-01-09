<?php

namespace Sunaoka\Aws\Structures\SageMaker\DescribeFeatureGroup;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $FeatureGroupName
 * @property string $NextToken
 */
class DescribeFeatureGroupRequest extends Request
{
    /**
     * @param array{
     *     FeatureGroupName: string,
     *     NextToken?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
