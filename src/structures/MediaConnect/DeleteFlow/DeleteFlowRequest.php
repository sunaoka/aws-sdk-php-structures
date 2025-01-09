<?php

namespace Sunaoka\Aws\Structures\MediaConnect\DeleteFlow;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $FlowArn
 */
class DeleteFlowRequest extends Request
{
    /**
     * @param array{FlowArn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
