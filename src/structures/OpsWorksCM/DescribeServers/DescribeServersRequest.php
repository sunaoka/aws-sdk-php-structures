<?php

namespace Sunaoka\Aws\Structures\OpsWorksCM\DescribeServers;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ServerName
 * @property string $NextToken
 * @property int<1, max> $MaxResults
 */
class DescribeServersRequest extends Request
{
    /**
     * @param array{
     *     ServerName?: string,
     *     NextToken?: string,
     *     MaxResults?: int<1, max>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
