<?php

namespace Sunaoka\Aws\Structures\BedrockDataAutomation\UpdateDataAutomationProject\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property SplitterConfiguration $splitter
 */
class DocumentOverrideConfiguration extends Shape
{
    /**
     * @param array{splitter?: SplitterConfiguration} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
