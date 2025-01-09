<?php

namespace Sunaoka\Aws\Structures\Connect\SearchAgentStatuses\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $AgentStatusARN
 * @property string $AgentStatusId
 * @property string $Name
 * @property string $Description
 * @property 'ROUTABLE'|'CUSTOM'|'OFFLINE' $Type
 * @property int<1, 50> $DisplayOrder
 * @property 'ENABLED'|'DISABLED' $State
 * @property array<string, string> $Tags
 * @property \Aws\Api\DateTimeResult $LastModifiedTime
 * @property string $LastModifiedRegion
 */
class AgentStatus extends Shape
{
    /**
     * @param array{
     *     AgentStatusARN?: string,
     *     AgentStatusId?: string,
     *     Name?: string,
     *     Description?: string,
     *     Type?: 'ROUTABLE'|'CUSTOM'|'OFFLINE',
     *     DisplayOrder?: int<1, 50>,
     *     State?: 'ENABLED'|'DISABLED',
     *     Tags?: array<string, string>,
     *     LastModifiedTime?: \Aws\Api\DateTimeResult,
     *     LastModifiedRegion?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
