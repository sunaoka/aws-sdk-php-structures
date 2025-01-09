<?php

namespace Sunaoka\Aws\Structures\CloudDirectory\UpdateTypedLinkFacet;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $SchemaArn
 * @property string $Name
 * @property list<Shapes\TypedLinkFacetAttributeUpdate> $AttributeUpdates
 * @property list<string> $IdentityAttributeOrder
 */
class UpdateTypedLinkFacetRequest extends Request
{
    /**
     * @param array{
     *     SchemaArn: string,
     *     Name: string,
     *     AttributeUpdates: list<Shapes\TypedLinkFacetAttributeUpdate>,
     *     IdentityAttributeOrder: list<string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
