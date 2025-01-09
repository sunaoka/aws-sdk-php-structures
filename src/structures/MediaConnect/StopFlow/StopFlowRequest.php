<?php

namespace Sunaoka\Aws\Structures\MediaConnect\StopFlow;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $FlowArn
 */
class StopFlowRequest extends Request
{
    /**
     * @param array{FlowArn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
