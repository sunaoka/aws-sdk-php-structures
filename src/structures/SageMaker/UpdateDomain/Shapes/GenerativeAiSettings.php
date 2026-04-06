<?php

namespace Sunaoka\Aws\Structures\SageMaker\UpdateDomain\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $AmazonBedrockRoleArn
 */
class GenerativeAiSettings extends Shape
{
    /**
     * @param array{AmazonBedrockRoleArn?: string|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
