<?php

namespace Sunaoka\Aws\Structures\ApiGatewayV2\ListPortalProducts;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $MaxResults
 * @property string|null $NextToken
 * @property string|null $ResourceOwner
 */
class ListPortalProductsRequest extends Request
{
    /**
     * @param array{
     *     MaxResults?: string|null,
     *     NextToken?: string|null,
     *     ResourceOwner?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
