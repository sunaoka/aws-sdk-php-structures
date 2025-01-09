<?php

namespace Sunaoka\Aws\Structures\Route53Resolver\ListOutpostResolvers;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $OutpostArn
 * @property int $MaxResults
 * @property string $NextToken
 */
class ListOutpostResolversRequest extends Request
{
    /**
     * @param array{
     *     OutpostArn?: string,
     *     MaxResults?: int,
     *     NextToken?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
