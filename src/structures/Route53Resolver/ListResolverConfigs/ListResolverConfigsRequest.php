<?php

namespace Sunaoka\Aws\Structures\Route53Resolver\ListResolverConfigs;

use Sunaoka\Aws\Structures\Request;

/**
 * @property int<5, 100> $MaxResults
 * @property string $NextToken
 */
class ListResolverConfigsRequest extends Request
{
    /**
     * @param array{
     *     MaxResults?: int<5, 100>,
     *     NextToken?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
