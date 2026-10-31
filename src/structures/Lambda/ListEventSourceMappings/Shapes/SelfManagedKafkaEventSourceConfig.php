<?php

namespace Sunaoka\Aws\Structures\Lambda\ListEventSourceMappings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $ConsumerGroupId
 * @property KafkaSchemaRegistryConfig|null $SchemaRegistryConfig
 * @property 'Stream'|'Queue'|null $ConsumptionMode
 */
class SelfManagedKafkaEventSourceConfig extends Shape
{
    /**
     * @param array{
     *     ConsumerGroupId?: string|null,
     *     SchemaRegistryConfig?: KafkaSchemaRegistryConfig|null,
     *     ConsumptionMode?: 'Stream'|'Queue'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
