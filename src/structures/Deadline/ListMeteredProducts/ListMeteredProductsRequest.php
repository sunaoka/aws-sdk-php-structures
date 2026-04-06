<?php

namespace Sunaoka\Aws\Structures\Deadline\ListMeteredProducts;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $licenseEndpointId
 * @property int<1, 100>|null $maxResults
 * @property string|null $nextToken
 */
class ListMeteredProductsRequest extends Request
{
    /**
     * @param array{
     *     licenseEndpointId: string,
     *     maxResults?: int<1, 100>|null,
     *     nextToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
