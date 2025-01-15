<?php

namespace Sunaoka\Aws\Structures\GreengrassV2\ListDeployments;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $targetArn
 * @property 'ALL'|'LATEST_ONLY'|null $historyFilter
 * @property string|null $parentTargetArn
 * @property int<1, 100>|null $maxResults
 * @property string|null $nextToken
 */
class ListDeploymentsRequest extends Request
{
    /**
     * @param array{
     *     targetArn?: string|null,
     *     historyFilter?: 'ALL'|'LATEST_ONLY'|null,
     *     parentTargetArn?: string|null,
     *     maxResults?: int<1, 100>|null,
     *     nextToken?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
