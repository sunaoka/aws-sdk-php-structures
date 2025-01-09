<?php

namespace Sunaoka\Aws\Structures\SnowBall\DescribeAddresses;

use Sunaoka\Aws\Structures\Request;

/**
 * @property int<0, 100> $MaxResults
 * @property string $NextToken
 */
class DescribeAddressesRequest extends Request
{
    /**
     * @param array{
     *     MaxResults?: int<0, 100>,
     *     NextToken?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
