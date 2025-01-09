<?php

namespace Sunaoka\Aws\Structures\BackupGateway\ListGateways;

use Sunaoka\Aws\Structures\Request;

/**
 * @property int<1, max> $MaxResults
 * @property string $NextToken
 */
class ListGatewaysRequest extends Request
{
    /**
     * @param array{
     *     MaxResults?: int<1, max>,
     *     NextToken?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
