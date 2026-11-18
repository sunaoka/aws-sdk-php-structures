<?php

namespace Sunaoka\Aws\Structures\mgn\ListRemoteSourceActionInvocationResults;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $sourceServerID
 * @property int<1, 1000>|null $maxResults
 * @property string|null $nextToken
 * @property string|null $accountID
 */
class ListRemoteSourceActionInvocationResultsRequest extends Request
{
    /**
     * @param array{
     *     sourceServerID: string,
     *     maxResults?: int<1, 1000>|null,
     *     nextToken?: string|null,
     *     accountID?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
