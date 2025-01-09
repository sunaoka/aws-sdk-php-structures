<?php

namespace Sunaoka\Aws\Structures\Appflow\CreateFlow;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $flowName
 * @property string $description
 * @property string $kmsArn
 * @property Shapes\TriggerConfig $triggerConfig
 * @property Shapes\SourceFlowConfig $sourceFlowConfig
 * @property list<Shapes\DestinationFlowConfig> $destinationFlowConfigList
 * @property list<Shapes\Task> $tasks
 * @property array<string, string> $tags
 * @property Shapes\MetadataCatalogConfig $metadataCatalogConfig
 * @property string $clientToken
 */
class CreateFlowRequest extends Request
{
    /**
     * @param array{
     *     flowName: string,
     *     description?: string,
     *     kmsArn?: string,
     *     triggerConfig: Shapes\TriggerConfig,
     *     sourceFlowConfig: Shapes\SourceFlowConfig,
     *     destinationFlowConfigList: list<Shapes\DestinationFlowConfig>,
     *     tasks: list<Shapes\Task>,
     *     tags?: array<string, string>,
     *     metadataCatalogConfig?: Shapes\MetadataCatalogConfig,
     *     clientToken?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
