<?php

namespace Sunaoka\Aws\Structures\AgentRegistryControl\GetRegistry\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'MCP'|'AGENT'|'CUSTOM'|'SKILL'|'GATEWAY' $recordType
 * @property string $schema
 */
class RecordTypeSchemaOverride extends Shape
{
    /**
     * @param array{
     *     recordType: 'MCP'|'AGENT'|'CUSTOM'|'SKILL'|'GATEWAY',
     *     schema: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
