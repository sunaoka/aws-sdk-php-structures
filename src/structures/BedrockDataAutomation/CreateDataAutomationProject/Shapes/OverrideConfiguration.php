<?php

namespace Sunaoka\Aws\Structures\BedrockDataAutomation\CreateDataAutomationProject\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property DocumentOverrideConfiguration|null $document
 */
class OverrideConfiguration extends Shape
{
    /**
     * @param array{document?: DocumentOverrideConfiguration|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
