<?php

namespace Sunaoka\Aws\Structures\Lambda\ListEventSourceMappings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $ConsumerGroupId
 * @property KafkaSchemaRegistryConfig|null $SchemaRegistryConfig
 */
class AmazonManagedKafkaEventSourceConfig extends Shape
{
    /**
     * @param array{
     *     ConsumerGroupId?: string|null,
     *     SchemaRegistryConfig?: KafkaSchemaRegistryConfig|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
