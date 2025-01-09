<?php

namespace Sunaoka\Aws\Structures\CloudDirectory\UpdateFacet;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $SchemaArn
 * @property string $Name
 * @property list<Shapes\FacetAttributeUpdate> $AttributeUpdates
 * @property 'NODE'|'LEAF_NODE'|'POLICY'|'INDEX' $ObjectType
 */
class UpdateFacetRequest extends Request
{
    /**
     * @param array{
     *     SchemaArn: string,
     *     Name: string,
     *     AttributeUpdates?: list<Shapes\FacetAttributeUpdate>,
     *     ObjectType?: 'NODE'|'LEAF_NODE'|'POLICY'|'INDEX'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
