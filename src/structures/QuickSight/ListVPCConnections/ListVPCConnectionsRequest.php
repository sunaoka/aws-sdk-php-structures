<?php

namespace Sunaoka\Aws\Structures\QuickSight\ListVPCConnections;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AwsAccountId
 * @property string $NextToken
 * @property int<1, 100> $MaxResults
 */
class ListVPCConnectionsRequest extends Request
{
    /**
     * @param array{
     *     AwsAccountId: string,
     *     NextToken?: string,
     *     MaxResults?: int<1, 100>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
