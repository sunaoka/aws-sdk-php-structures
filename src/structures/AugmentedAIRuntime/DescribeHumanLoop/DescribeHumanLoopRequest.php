<?php

namespace Sunaoka\Aws\Structures\AugmentedAIRuntime\DescribeHumanLoop;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $HumanLoopName
 */
class DescribeHumanLoopRequest extends Request
{
    /**
     * @param array{HumanLoopName: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
