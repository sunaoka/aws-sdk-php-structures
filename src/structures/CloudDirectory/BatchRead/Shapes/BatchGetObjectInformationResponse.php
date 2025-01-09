<?php

namespace Sunaoka\Aws\Structures\CloudDirectory\BatchRead\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<SchemaFacet> $SchemaFacets
 * @property string $ObjectIdentifier
 */
class BatchGetObjectInformationResponse extends Shape
{
    /**
     * @param array{
     *     SchemaFacets?: list<SchemaFacet>,
     *     ObjectIdentifier?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
