<?php

namespace Sunaoka\Aws\Structures\EKS\ListAccessEntries;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $clusterName
 * @property string|null $associatedPolicyArn
 * @property int<1, 100>|null $maxResults
 * @property string|null $nextToken
 */
class ListAccessEntriesRequest extends Request
{
    /**
     * @param array{
     *     clusterName: string,
     *     associatedPolicyArn?: string|null,
     *     maxResults?: int<1, 100>|null,
     *     nextToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
