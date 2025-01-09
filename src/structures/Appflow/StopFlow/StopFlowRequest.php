<?php

namespace Sunaoka\Aws\Structures\Appflow\StopFlow;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $flowName
 */
class StopFlowRequest extends Request
{
    /**
     * @param array{flowName: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
