<?php

namespace Sunaoka\Aws\Structures\CloudDirectory\ListTypedLinkFacetAttributes;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $SchemaArn
 * @property string $Name
 * @property string|null $NextToken
 * @property int<1, max>|null $MaxResults
 */
class ListTypedLinkFacetAttributesRequest extends Request
{
    /**
     * @param array{
     *     SchemaArn: string,
     *     Name: string,
     *     NextToken?: string|null,
     *     MaxResults?: int<1, max>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
