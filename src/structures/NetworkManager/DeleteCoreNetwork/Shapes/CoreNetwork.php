<?php

namespace Sunaoka\Aws\Structures\NetworkManager\DeleteCoreNetwork\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $GlobalNetworkId
 * @property string|null $CoreNetworkId
 * @property string|null $CoreNetworkArn
 * @property string|null $Description
 * @property \Aws\Api\DateTimeResult|null $CreatedAt
 * @property 'CREATING'|'UPDATING'|'AVAILABLE'|'DELETING'|null $State
 * @property list<CoreNetworkSegment>|null $Segments
 * @property list<CoreNetworkNetworkFunctionGroup>|null $NetworkFunctionGroups
 * @property list<CoreNetworkEdge>|null $Edges
 * @property list<Tag>|null $Tags
 */
class CoreNetwork extends Shape
{
    /**
     * @param array{
     *     GlobalNetworkId?: string|null,
     *     CoreNetworkId?: string|null,
     *     CoreNetworkArn?: string|null,
     *     Description?: string|null,
     *     CreatedAt?: \Aws\Api\DateTimeResult|null,
     *     State?: 'CREATING'|'UPDATING'|'AVAILABLE'|'DELETING'|null,
     *     Segments?: list<CoreNetworkSegment>|null,
     *     NetworkFunctionGroups?: list<CoreNetworkNetworkFunctionGroup>|null,
     *     Edges?: list<CoreNetworkEdge>|null,
     *     Tags?: list<Tag>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
