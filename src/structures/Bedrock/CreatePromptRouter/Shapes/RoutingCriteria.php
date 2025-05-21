<?php

namespace Sunaoka\Aws\Structures\Bedrock\CreatePromptRouter\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property double $responseQualityDifference
 */
class RoutingCriteria extends Shape
{
    /**
     * @param array{responseQualityDifference: double} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
