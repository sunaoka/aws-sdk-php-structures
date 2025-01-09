<?php

namespace Sunaoka\Aws\Structures\SupplyChain\UpdateDataIntegrationFlow;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $instanceId
 * @property string $name
 * @property list<Shapes\DataIntegrationFlowSource> $sources
 * @property Shapes\DataIntegrationFlowTransformation $transformation
 * @property Shapes\DataIntegrationFlowTarget $target
 */
class UpdateDataIntegrationFlowRequest extends Request
{
    /**
     * @param array{
     *     instanceId: string,
     *     name: string,
     *     sources?: list<Shapes\DataIntegrationFlowSource>,
     *     transformation?: Shapes\DataIntegrationFlowTransformation,
     *     target?: Shapes\DataIntegrationFlowTarget
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
