<?php

namespace Sunaoka\Aws\Structures\MediaConnect\AddFlowOutputs;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $FlowArn
 * @property list<Shapes\AddOutputRequest> $Outputs
 */
class AddFlowOutputsRequest extends Request
{
    /**
     * @param array{
     *     FlowArn: string,
     *     Outputs: list<Shapes\AddOutputRequest>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
