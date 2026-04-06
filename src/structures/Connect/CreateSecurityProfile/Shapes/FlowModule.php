<?php

namespace Sunaoka\Aws\Structures\Connect\CreateSecurityProfile\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'MCP'|null $Type
 * @property string|null $FlowModuleId
 */
class FlowModule extends Shape
{
    /**
     * @param array{
     *     Type?: 'MCP'|null,
     *     FlowModuleId?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
