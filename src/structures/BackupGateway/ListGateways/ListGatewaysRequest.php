<?php

namespace Sunaoka\Aws\Structures\BackupGateway\ListGateways;

use Sunaoka\Aws\Structures\Request;

/**
 * @property int<1, max>|null $MaxResults
 * @property string|null $NextToken
 */
class ListGatewaysRequest extends Request
{
    /**
     * @param array{
     *     MaxResults?: int<1, max>|null,
     *     NextToken?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
