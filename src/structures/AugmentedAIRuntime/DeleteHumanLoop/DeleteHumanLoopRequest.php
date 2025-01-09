<?php

namespace Sunaoka\Aws\Structures\AugmentedAIRuntime\DeleteHumanLoop;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $HumanLoopName
 */
class DeleteHumanLoopRequest extends Request
{
    /**
     * @param array{HumanLoopName: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
