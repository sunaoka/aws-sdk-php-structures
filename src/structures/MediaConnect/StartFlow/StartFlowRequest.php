<?php

namespace Sunaoka\Aws\Structures\MediaConnect\StartFlow;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $FlowArn
 */
class StartFlowRequest extends Request
{
    /**
     * @param array{FlowArn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
