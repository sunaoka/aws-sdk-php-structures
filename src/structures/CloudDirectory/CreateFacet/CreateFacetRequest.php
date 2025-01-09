<?php

namespace Sunaoka\Aws\Structures\CloudDirectory\CreateFacet;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $SchemaArn
 * @property string $Name
 * @property list<Shapes\FacetAttribute> $Attributes
 * @property 'NODE'|'LEAF_NODE'|'POLICY'|'INDEX' $ObjectType
 * @property 'STATIC'|'DYNAMIC' $FacetStyle
 */
class CreateFacetRequest extends Request
{
    /**
     * @param array{
     *     SchemaArn: string,
     *     Name: string,
     *     Attributes?: list<Shapes\FacetAttribute>,
     *     ObjectType?: 'NODE'|'LEAF_NODE'|'POLICY'|'INDEX',
     *     FacetStyle?: 'STATIC'|'DYNAMIC'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
