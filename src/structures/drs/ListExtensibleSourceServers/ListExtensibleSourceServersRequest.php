<?php

namespace Sunaoka\Aws\Structures\drs\ListExtensibleSourceServers;

use Sunaoka\Aws\Structures\Request;

/**
 * @property int<1, 300>|null $maxResults
 * @property string|null $nextToken
 * @property string $stagingAccountID
 */
class ListExtensibleSourceServersRequest extends Request
{
    /**
     * @param array{
     *     maxResults?: int<1, 300>|null,
     *     nextToken?: string|null,
     *     stagingAccountID: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
