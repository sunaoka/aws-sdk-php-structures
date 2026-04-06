<?php

namespace Sunaoka\Aws\Structures\Lambda\CreateEventSourceMapping\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $SchemaRegistryURI
 * @property 'JSON'|'SOURCE'|null $EventRecordFormat
 * @property list<KafkaSchemaRegistryAccessConfig>|null $AccessConfigs
 * @property list<KafkaSchemaValidationConfig>|null $SchemaValidationConfigs
 */
class KafkaSchemaRegistryConfig extends Shape
{
    /**
     * @param array{
     *     SchemaRegistryURI?: string|null,
     *     EventRecordFormat?: 'JSON'|'SOURCE'|null,
     *     AccessConfigs?: list<KafkaSchemaRegistryAccessConfig>|null,
     *     SchemaValidationConfigs?: list<KafkaSchemaValidationConfig>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
