<?php

namespace Sunaoka\Aws\Structures\SupplyChain\GetDataIntegrationFlow\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $instanceId
 * @property string $name
 * @property list<DataIntegrationFlowSource> $sources
 * @property DataIntegrationFlowTransformation $transformation
 * @property DataIntegrationFlowTarget $target
 * @property \Aws\Api\DateTimeResult $createdTime
 * @property \Aws\Api\DateTimeResult $lastModifiedTime
 */
class DataIntegrationFlow extends Shape
{
    /**
     * @param array{
     *     instanceId: string,
     *     name: string,
     *     sources: list<DataIntegrationFlowSource>,
     *     transformation: DataIntegrationFlowTransformation,
     *     target: DataIntegrationFlowTarget,
     *     createdTime: \Aws\Api\DateTimeResult,
     *     lastModifiedTime: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
