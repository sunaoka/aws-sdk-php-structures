<?php

namespace Sunaoka\Aws\Structures\Personalize\DescribeFeatureTransformation;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $featureTransformationArn
 */
class DescribeFeatureTransformationRequest extends Request
{
    /**
     * @param array{featureTransformationArn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
