<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCoreControl\CreateGatewayTarget\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'string'|'number'|'object'|'array'|'boolean'|'integer' $type
 * @property array<string, SchemaDefinition>|null $properties
 * @property list<string>|null $required
 * @property SchemaDefinition|null $items
 * @property string|null $description
 */
class SchemaDefinition extends Shape
{
    /**
     * @param array{
     *     type: 'string'|'number'|'object'|'array'|'boolean'|'integer',
     *     properties?: array<string, SchemaDefinition>|null,
     *     required?: list<string>|null,
     *     items?: SchemaDefinition|null,
     *     description?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
