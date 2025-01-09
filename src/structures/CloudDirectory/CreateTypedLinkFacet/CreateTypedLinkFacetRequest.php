<?php

namespace Sunaoka\Aws\Structures\CloudDirectory\CreateTypedLinkFacet;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $SchemaArn
 * @property Shapes\TypedLinkFacet $Facet
 */
class CreateTypedLinkFacetRequest extends Request
{
    /**
     * @param array{
     *     SchemaArn: string,
     *     Facet: Shapes\TypedLinkFacet
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
