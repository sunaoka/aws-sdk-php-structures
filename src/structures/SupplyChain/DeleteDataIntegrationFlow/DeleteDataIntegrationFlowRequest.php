<?php

namespace Sunaoka\Aws\Structures\SupplyChain\DeleteDataIntegrationFlow;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $instanceId
 * @property string $name
 */
class DeleteDataIntegrationFlowRequest extends Request
{
    /**
     * @param array{
     *     instanceId: string,
     *     name: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
