<?php

namespace Sunaoka\Aws\Structures\CloudDirectory\GetFacet;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $SchemaArn
 * @property string $Name
 */
class GetFacetRequest extends Request
{
    /**
     * @param array{
     *     SchemaArn: string,
     *     Name: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
