<?php

namespace Sunaoka\Aws\Structures\CloudDirectory\BatchRead\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<SchemaFacet>|null $SchemaFacets
 * @property string|null $ObjectIdentifier
 */
class BatchGetObjectInformationResponse extends Shape
{
    /**
     * @param array{
     *     SchemaFacets?: list<SchemaFacet>|null,
     *     ObjectIdentifier?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
