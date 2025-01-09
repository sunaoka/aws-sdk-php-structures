<?php

namespace Sunaoka\Aws\Structures\drs\ListExtensibleSourceServers;

use Sunaoka\Aws\Structures\Request;

/**
 * @property int $maxResults
 * @property string $nextToken
 * @property string $stagingAccountID
 */
class ListExtensibleSourceServersRequest extends Request
{
    /**
     * @param array{
     *     maxResults?: int,
     *     nextToken?: string,
     *     stagingAccountID: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
