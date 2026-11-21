<?php

namespace Sunaoka\Aws\Structures\AgentDiscovery\SearchPublicRecords\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'publishedFrom'|'discoveredFrom'|'federatedFrom' $relation
 * @property string $sourceId
 */
class ProvenanceLink extends Shape
{
    /**
     * @param array{
     *     relation: 'publishedFrom'|'discoveredFrom'|'federatedFrom',
     *     sourceId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
