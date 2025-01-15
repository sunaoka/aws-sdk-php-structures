<?php

namespace Sunaoka\Aws\Structures\SupplyChain\UpdateDataIntegrationFlow;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $instanceId
 * @property string $name
 * @property list<Shapes\DataIntegrationFlowSource>|null $sources
 * @property Shapes\DataIntegrationFlowTransformation|null $transformation
 * @property Shapes\DataIntegrationFlowTarget|null $target
 */
class UpdateDataIntegrationFlowRequest extends Request
{
    /**
     * @param array{
     *     instanceId: string,
     *     name: string,
     *     sources?: list<Shapes\DataIntegrationFlowSource>|null,
     *     transformation?: Shapes\DataIntegrationFlowTransformation|null,
     *     target?: Shapes\DataIntegrationFlowTarget|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
