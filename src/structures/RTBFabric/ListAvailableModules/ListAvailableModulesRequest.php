<?php

namespace Sunaoka\Aws\Structures\RTBFabric\ListAvailableModules;

use Sunaoka\Aws\Structures\Request;

/**
 * @property 'MARKETPLACE'|'PRIVATE'|'AWS_BUILT_IN'|null $subscriptionType
 * @property int<1, 10>|null $maxResults
 * @property string|null $nextToken
 */
class ListAvailableModulesRequest extends Request
{
    /**
     * @param array{
     *     subscriptionType?: 'MARKETPLACE'|'PRIVATE'|'AWS_BUILT_IN'|null,
     *     maxResults?: int<1, 10>|null,
     *     nextToken?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
