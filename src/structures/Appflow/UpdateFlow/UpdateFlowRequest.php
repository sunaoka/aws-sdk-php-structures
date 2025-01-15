<?php

namespace Sunaoka\Aws\Structures\Appflow\UpdateFlow;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $flowName
 * @property string|null $description
 * @property Shapes\TriggerConfig $triggerConfig
 * @property Shapes\SourceFlowConfig $sourceFlowConfig
 * @property list<Shapes\DestinationFlowConfig> $destinationFlowConfigList
 * @property list<Shapes\Task> $tasks
 * @property Shapes\MetadataCatalogConfig|null $metadataCatalogConfig
 * @property string|null $clientToken
 */
class UpdateFlowRequest extends Request
{
    /**
     * @param array{
     *     flowName: string,
     *     description?: string|null,
     *     triggerConfig: Shapes\TriggerConfig,
     *     sourceFlowConfig: Shapes\SourceFlowConfig,
     *     destinationFlowConfigList: list<Shapes\DestinationFlowConfig>,
     *     tasks: list<Shapes\Task>,
     *     metadataCatalogConfig?: Shapes\MetadataCatalogConfig|null,
     *     clientToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
