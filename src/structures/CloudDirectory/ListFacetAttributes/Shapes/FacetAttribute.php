<?php

namespace Sunaoka\Aws\Structures\CloudDirectory\ListFacetAttributes\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Name
 * @property FacetAttributeDefinition|null $AttributeDefinition
 * @property FacetAttributeReference|null $AttributeReference
 * @property 'REQUIRED_ALWAYS'|'NOT_REQUIRED'|null $RequiredBehavior
 */
class FacetAttribute extends Shape
{
    /**
     * @param array{
     *     Name: string,
     *     AttributeDefinition?: FacetAttributeDefinition|null,
     *     AttributeReference?: FacetAttributeReference|null,
     *     RequiredBehavior?: 'REQUIRED_ALWAYS'|'NOT_REQUIRED'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
