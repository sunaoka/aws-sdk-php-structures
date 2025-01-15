<?php

namespace Sunaoka\Aws\Structures\Deadline\ListMeteredProducts;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $licenseEndpointId
 * @property string|null $nextToken
 * @property int<1, 100>|null $maxResults
 */
class ListMeteredProductsRequest extends Request
{
    /**
     * @param array{
     *     licenseEndpointId: string,
     *     nextToken?: string|null,
     *     maxResults?: int<1, 100>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
