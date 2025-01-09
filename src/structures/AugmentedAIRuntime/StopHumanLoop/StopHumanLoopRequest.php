<?php

namespace Sunaoka\Aws\Structures\AugmentedAIRuntime\StopHumanLoop;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $HumanLoopName
 */
class StopHumanLoopRequest extends Request
{
    /**
     * @param array{HumanLoopName: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
