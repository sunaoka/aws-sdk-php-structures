<?php

namespace Sunaoka\Aws\Structures\QConnect\CreateAIAgentVersion\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool|null $isUserConfirmationRequired
 */
class UserInteractionConfiguration extends Shape
{
    /**
     * @param array{isUserConfirmationRequired?: bool|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
