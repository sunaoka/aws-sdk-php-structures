<?php

namespace Sunaoka\Aws\Structures\CloudDirectory\CreateFacet;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $SchemaArn
 * @property string $Name
 * @property list<Shapes\FacetAttribute>|null $Attributes
 * @property 'NODE'|'LEAF_NODE'|'POLICY'|'INDEX'|null $ObjectType
 * @property 'STATIC'|'DYNAMIC'|null $FacetStyle
 */
class CreateFacetRequest extends Request
{
    /**
     * @param array{
     *     SchemaArn: string,
     *     Name: string,
     *     Attributes?: list<Shapes\FacetAttribute>|null,
     *     ObjectType?: 'NODE'|'LEAF_NODE'|'POLICY'|'INDEX'|null,
     *     FacetStyle?: 'STATIC'|'DYNAMIC'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
