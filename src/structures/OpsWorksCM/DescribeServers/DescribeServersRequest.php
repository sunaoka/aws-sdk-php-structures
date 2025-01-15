<?php

namespace Sunaoka\Aws\Structures\OpsWorksCM\DescribeServers;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $ServerName
 * @property string|null $NextToken
 * @property int<1, max>|null $MaxResults
 */
class DescribeServersRequest extends Request
{
    /**
     * @param array{
     *     ServerName?: string|null,
     *     NextToken?: string|null,
     *     MaxResults?: int<1, max>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
