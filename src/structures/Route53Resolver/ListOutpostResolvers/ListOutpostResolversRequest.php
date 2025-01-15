<?php

namespace Sunaoka\Aws\Structures\Route53Resolver\ListOutpostResolvers;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $OutpostArn
 * @property int<1, 100>|null $MaxResults
 * @property string|null $NextToken
 */
class ListOutpostResolversRequest extends Request
{
    /**
     * @param array{
     *     OutpostArn?: string|null,
     *     MaxResults?: int<1, 100>|null,
     *     NextToken?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
