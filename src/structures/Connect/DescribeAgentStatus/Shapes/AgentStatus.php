<?php

namespace Sunaoka\Aws\Structures\Connect\DescribeAgentStatus\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $AgentStatusARN
 * @property string|null $AgentStatusId
 * @property string|null $Name
 * @property string|null $Description
 * @property 'ROUTABLE'|'CUSTOM'|'OFFLINE'|null $Type
 * @property int<1, 50>|null $DisplayOrder
 * @property 'ENABLED'|'DISABLED'|null $State
 * @property array<string, string>|null $Tags
 * @property \Aws\Api\DateTimeResult|null $LastModifiedTime
 * @property string|null $LastModifiedRegion
 */
class AgentStatus extends Shape
{
    /**
     * @param array{
     *     AgentStatusARN?: string|null,
     *     AgentStatusId?: string|null,
     *     Name?: string|null,
     *     Description?: string|null,
     *     Type?: 'ROUTABLE'|'CUSTOM'|'OFFLINE'|null,
     *     DisplayOrder?: int<1, 50>|null,
     *     State?: 'ENABLED'|'DISABLED'|null,
     *     Tags?: array<string, string>|null,
     *     LastModifiedTime?: \Aws\Api\DateTimeResult|null,
     *     LastModifiedRegion?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
