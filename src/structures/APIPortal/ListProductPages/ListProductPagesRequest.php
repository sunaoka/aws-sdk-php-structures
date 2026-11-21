<?php

namespace Sunaoka\Aws\Structures\APIPortal\ListProductPages;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $productId
 * @property string|null $nextToken
 * @property int<1, 100>|null $maxResults
 * @property string|null $resourceOwnerAccountId
 */
class ListProductPagesRequest extends Request
{
    /**
     * @param array{
     *     productId: string,
     *     nextToken?: string|null,
     *     maxResults?: int<1, 100>|null,
     *     resourceOwnerAccountId?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
