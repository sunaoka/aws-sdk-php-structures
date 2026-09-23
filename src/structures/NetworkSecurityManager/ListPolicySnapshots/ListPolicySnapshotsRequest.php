<?php

namespace Sunaoka\Aws\Structures\NetworkSecurityManager\ListPolicySnapshots;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $policyIdentifier
 * @property int<1, 100>|null $maxResults
 * @property string|null $nextToken
 */
class ListPolicySnapshotsRequest extends Request
{
    /**
     * @param array{
     *     policyIdentifier: string,
     *     maxResults?: int<1, 100>|null,
     *     nextToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
