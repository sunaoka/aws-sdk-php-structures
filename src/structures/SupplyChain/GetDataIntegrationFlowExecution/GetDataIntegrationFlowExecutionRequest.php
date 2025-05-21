<?php

namespace Sunaoka\Aws\Structures\SupplyChain\GetDataIntegrationFlowExecution;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $instanceId
 * @property string $flowName
 * @property string $executionId
 */
class GetDataIntegrationFlowExecutionRequest extends Request
{
    /**
     * @param array{
     *     instanceId: string,
     *     flowName: string,
     *     executionId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
