<?php

namespace Sunaoka\Aws\Structures\ApiGatewayV2\ListProductPages;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $MaxResults
 * @property string|null $NextToken
 * @property string $PortalProductId
 * @property string|null $ResourceOwnerAccountId
 */
class ListProductPagesRequest extends Request
{
    /**
     * @param array{
     *     MaxResults?: string|null,
     *     NextToken?: string|null,
     *     PortalProductId: string,
     *     ResourceOwnerAccountId?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
