<?php

namespace Sunaoka\Aws\Structures\mgn\ListRemoteSourceActionInvocations;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $remoteSourceActionJobID
 * @property Shapes\ListRemoteSourceActionInvocationsRequestFilters|null $filters
 * @property int<1, 1000>|null $maxResults
 * @property string|null $nextToken
 * @property string|null $accountID
 */
class ListRemoteSourceActionInvocationsRequest extends Request
{
    /**
     * @param array{
     *     remoteSourceActionJobID: string,
     *     filters?: Shapes\ListRemoteSourceActionInvocationsRequestFilters|null,
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
