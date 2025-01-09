<?php

namespace Sunaoka\Aws\Structures\SageMaker\DescribeUserProfile\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $AmazonBedrockRoleArn
 */
class GenerativeAiSettings extends Shape
{
    /**
     * @param array{AmazonBedrockRoleArn?: string} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
