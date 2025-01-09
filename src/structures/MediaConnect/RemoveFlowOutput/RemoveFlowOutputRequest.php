<?php

namespace Sunaoka\Aws\Structures\MediaConnect\RemoveFlowOutput;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $FlowArn
 * @property string $OutputArn
 */
class RemoveFlowOutputRequest extends Request
{
    /**
     * @param array{
     *     FlowArn: string,
     *     OutputArn: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
