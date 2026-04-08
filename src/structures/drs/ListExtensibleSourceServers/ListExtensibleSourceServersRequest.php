<?php

namespace Sunaoka\Aws\Structures\drs\ListExtensibleSourceServers;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $stagingAccountID
 * @property int<1, 300>|null $maxResults
 * @property string|null $nextToken
 */
class ListExtensibleSourceServersRequest extends Request
{
    /**
     * @param array{
     *     stagingAccountID: string,
     *     maxResults?: int<1, 300>|null,
     *     nextToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
