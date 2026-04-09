<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCoreControl\UpdateRegistry\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ApprovalConfiguration|null $optionalValue
 */
class UpdatedApprovalConfiguration extends Shape
{
    /**
     * @param array{optionalValue?: ApprovalConfiguration|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
