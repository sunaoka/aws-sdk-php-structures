<?php

namespace Sunaoka\Aws\Structures\CloudDirectory\CreateObject\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $SchemaArn
 * @property string $FacetName
 * @property string $Name
 */
class AttributeKey extends Shape
{
    /**
     * @param array{
     *     SchemaArn: string,
     *     FacetName: string,
     *     Name: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
