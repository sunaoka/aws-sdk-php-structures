<?php

namespace Sunaoka\Aws\Structures\Bedrock\ListInferenceProfiles\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $modelArn
 */
class InferenceProfileModel extends Shape
{
    /**
     * @param array{modelArn?: string} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
