<?php

namespace Sunaoka\Aws\Structures\Appflow\UpdateFlow;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $flowName
 * @property string $description
 * @property Shapes\TriggerConfig $triggerConfig
 * @property Shapes\SourceFlowConfig $sourceFlowConfig
 * @property list<Shapes\DestinationFlowConfig> $destinationFlowConfigList
 * @property list<Shapes\Task> $tasks
 * @property Shapes\MetadataCatalogConfig $metadataCatalogConfig
 * @property string $clientToken
 */
class UpdateFlowRequest extends Request
{
    /**
     * @param array{
     *     flowName: string,
     *     description?: string,
     *     triggerConfig: Shapes\TriggerConfig,
     *     sourceFlowConfig: Shapes\SourceFlowConfig,
     *     destinationFlowConfigList: list<Shapes\DestinationFlowConfig>,
     *     tasks: list<Shapes\Task>,
     *     metadataCatalogConfig?: Shapes\MetadataCatalogConfig,
     *     clientToken?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
