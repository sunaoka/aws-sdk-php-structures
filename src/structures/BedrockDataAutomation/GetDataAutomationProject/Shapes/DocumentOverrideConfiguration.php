<?php

namespace Sunaoka\Aws\Structures\BedrockDataAutomation\GetDataAutomationProject\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property SplitterConfiguration|null $splitter
 */
class DocumentOverrideConfiguration extends Shape
{
    /**
     * @param array{splitter?: SplitterConfiguration|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
