<?php

namespace Sunaoka\Aws\Structures\MediaConnect\ListBridges;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $FilterArn
 * @property int<1, 1000> $MaxResults
 * @property string $NextToken
 */
class ListBridgesRequest extends Request
{
    /**
     * @param array{
     *     FilterArn?: string,
     *     MaxResults?: int<1, 1000>,
     *     NextToken?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
