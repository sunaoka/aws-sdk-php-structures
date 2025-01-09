<?php

namespace Sunaoka\Aws\Structures\Deadline\ListMeteredProducts;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $licenseEndpointId
 * @property string $nextToken
 * @property int<1, 100> $maxResults
 */
class ListMeteredProductsRequest extends Request
{
    /**
     * @param array{
     *     licenseEndpointId: string,
     *     nextToken?: string,
     *     maxResults?: int<1, 100>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
