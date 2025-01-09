<?php

namespace Sunaoka\Aws\Structures\CloudDirectory\BatchWrite\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $SchemaArn
 * @property string $TypedLinkName
 */
class TypedLinkSchemaAndFacetName extends Shape
{
    /**
     * @param array{
     *     SchemaArn: string,
     *     TypedLinkName: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
