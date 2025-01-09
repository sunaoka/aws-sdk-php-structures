<?php

namespace Sunaoka\Aws\Structures\NetworkManager\UpdateCoreNetwork\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $GlobalNetworkId
 * @property string $CoreNetworkId
 * @property string $CoreNetworkArn
 * @property string $Description
 * @property \Aws\Api\DateTimeResult $CreatedAt
 * @property 'CREATING'|'UPDATING'|'AVAILABLE'|'DELETING' $State
 * @property list<CoreNetworkSegment> $Segments
 * @property list<CoreNetworkNetworkFunctionGroup> $NetworkFunctionGroups
 * @property list<CoreNetworkEdge> $Edges
 * @property list<Tag> $Tags
 */
class CoreNetwork extends Shape
{
    /**
     * @param array{
     *     GlobalNetworkId?: string,
     *     CoreNetworkId?: string,
     *     CoreNetworkArn?: string,
     *     Description?: string,
     *     CreatedAt?: \Aws\Api\DateTimeResult,
     *     State?: 'CREATING'|'UPDATING'|'AVAILABLE'|'DELETING',
     *     Segments?: list<CoreNetworkSegment>,
     *     NetworkFunctionGroups?: list<CoreNetworkNetworkFunctionGroup>,
     *     Edges?: list<CoreNetworkEdge>,
     *     Tags?: list<Tag>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
