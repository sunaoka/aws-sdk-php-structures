<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCoreControl\UpdateRegistry\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool|null $autoApproval
 */
class ApprovalConfiguration extends Shape
{
    /**
     * @param array{autoApproval?: bool|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
