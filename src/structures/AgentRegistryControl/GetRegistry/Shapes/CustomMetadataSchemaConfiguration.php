<?php

namespace Sunaoka\Aws\Structures\AgentRegistryControl\GetRegistry\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $defaultSchema
 * @property list<RecordTypeSchemaOverride>|null $recordTypeSchemaOverrides
 */
class CustomMetadataSchemaConfiguration extends Shape
{
    /**
     * @param array{
     *     defaultSchema?: string|null,
     *     recordTypeSchemaOverrides?: list<RecordTypeSchemaOverride>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
