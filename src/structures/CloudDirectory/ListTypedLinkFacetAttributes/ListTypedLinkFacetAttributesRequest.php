<?php

namespace Sunaoka\Aws\Structures\CloudDirectory\ListTypedLinkFacetAttributes;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $SchemaArn
 * @property string $Name
 * @property string $NextToken
 * @property int $MaxResults
 */
class ListTypedLinkFacetAttributesRequest extends Request
{
    /**
     * @param array{
     *     SchemaArn: string,
     *     Name: string,
     *     NextToken?: string,
     *     MaxResults?: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
