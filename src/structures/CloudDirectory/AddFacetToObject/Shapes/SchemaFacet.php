<?php

namespace Sunaoka\Aws\Structures\CloudDirectory\AddFacetToObject\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $SchemaArn
 * @property string|null $FacetName
 */
class SchemaFacet extends Shape
{
    /**
     * @param array{
     *     SchemaArn?: string|null,
     *     FacetName?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
