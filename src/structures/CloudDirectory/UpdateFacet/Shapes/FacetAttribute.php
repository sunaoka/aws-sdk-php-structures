<?php

namespace Sunaoka\Aws\Structures\CloudDirectory\UpdateFacet\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Name
 * @property FacetAttributeDefinition $AttributeDefinition
 * @property FacetAttributeReference $AttributeReference
 * @property 'REQUIRED_ALWAYS'|'NOT_REQUIRED' $RequiredBehavior
 */
class FacetAttribute extends Shape
{
    /**
     * @param array{
     *     Name: string,
     *     AttributeDefinition?: FacetAttributeDefinition,
     *     AttributeReference?: FacetAttributeReference,
     *     RequiredBehavior?: 'REQUIRED_ALWAYS'|'NOT_REQUIRED'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
