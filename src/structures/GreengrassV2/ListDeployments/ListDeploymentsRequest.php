<?php

namespace Sunaoka\Aws\Structures\GreengrassV2\ListDeployments;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $targetArn
 * @property 'ALL'|'LATEST_ONLY' $historyFilter
 * @property string $parentTargetArn
 * @property int<1, 100> $maxResults
 * @property string $nextToken
 */
class ListDeploymentsRequest extends Request
{
    /**
     * @param array{
     *     targetArn?: string,
     *     historyFilter?: 'ALL'|'LATEST_ONLY',
     *     parentTargetArn?: string,
     *     maxResults?: int<1, 100>,
     *     nextToken?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
