<?php

namespace Sunaoka\Aws\Structures\EKS\ListAssociatedAccessPolicies;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $clusterName
 * @property string $principalArn
 * @property int<1, 100> $maxResults
 * @property string $nextToken
 */
class ListAssociatedAccessPoliciesRequest extends Request
{
    /**
     * @param array{
     *     clusterName: string,
     *     principalArn: string,
     *     maxResults?: int<1, 100>,
     *     nextToken?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
