<?php

namespace Sunaoka\Aws\Structures\CloudDirectory\BatchRead\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $SchemaArn
 * @property string $FacetName
 */
class SchemaFacet extends Shape
{
    /**
     * @param array{
     *     SchemaArn?: string,
     *     FacetName?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
