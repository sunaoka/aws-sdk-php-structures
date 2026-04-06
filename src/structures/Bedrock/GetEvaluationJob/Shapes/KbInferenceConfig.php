<?php

namespace Sunaoka\Aws\Structures\Bedrock\GetEvaluationJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property TextInferenceConfig|null $textInferenceConfig
 */
class KbInferenceConfig extends Shape
{
    /**
     * @param array{textInferenceConfig?: TextInferenceConfig|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
