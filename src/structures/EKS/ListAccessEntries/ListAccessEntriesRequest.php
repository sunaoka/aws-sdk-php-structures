<?php

namespace Sunaoka\Aws\Structures\EKS\ListAccessEntries;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $clusterName
 * @property string $associatedPolicyArn
 * @property int<1, 100> $maxResults
 * @property string $nextToken
 */
class ListAccessEntriesRequest extends Request
{
    /**
     * @param array{
     *     clusterName: string,
     *     associatedPolicyArn?: string,
     *     maxResults?: int<1, 100>,
     *     nextToken?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
