<?php

namespace Sunaoka\Aws\Structures\CloudDirectory\CreateFacet\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $TargetFacetName
 * @property string $TargetAttributeName
 */
class FacetAttributeReference extends Shape
{
    /**
     * @param array{
     *     TargetFacetName: string,
     *     TargetAttributeName: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
