<?php

namespace Sunaoka\Aws\Structures\SupplyChain\CreateDataIntegrationFlow;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $instanceId
 * @property string $name
 * @property list<Shapes\DataIntegrationFlowSource> $sources
 * @property Shapes\DataIntegrationFlowTransformation $transformation
 * @property Shapes\DataIntegrationFlowTarget $target
 * @property array<string, string> $tags
 */
class CreateDataIntegrationFlowRequest extends Request
{
    /**
     * @param array{
     *     instanceId: string,
     *     name: string,
     *     sources: list<Shapes\DataIntegrationFlowSource>,
     *     transformation: Shapes\DataIntegrationFlowTransformation,
     *     target: Shapes\DataIntegrationFlowTarget,
     *     tags?: array<string, string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
