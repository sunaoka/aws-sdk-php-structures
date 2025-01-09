<?php

namespace Sunaoka\Aws\Structures\drs\ListExtensibleSourceServers;

use Sunaoka\Aws\Structures\Request;

/**
 * @property int<1, 300> $maxResults
 * @property string $nextToken
 * @property string $stagingAccountID
 */
class ListExtensibleSourceServersRequest extends Request
{
    /**
     * @param array{
     *     maxResults?: int<1, 300>,
     *     nextToken?: string,
     *     stagingAccountID: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
