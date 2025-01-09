<?php

namespace Sunaoka\Aws\Structures\CloudDirectory\BatchRead\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ObjectReference $ObjectReference
 * @property string $NextToken
 * @property int<1, max> $MaxResults
 * @property SchemaFacet $FacetFilter
 */
class BatchListObjectAttributes extends Shape
{
    /**
     * @param array{
     *     ObjectReference: ObjectReference,
     *     NextToken?: string,
     *     MaxResults?: int<1, max>,
     *     FacetFilter?: SchemaFacet
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
