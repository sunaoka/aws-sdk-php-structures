<?php

namespace Sunaoka\Aws\Structures\RedshiftServerless\ListScheduledActions;

use Sunaoka\Aws\Structures\Request;

/**
 * @property int<1, 100>|null $maxResults
 * @property string|null $namespaceName
 * @property string|null $nextToken
 */
class ListScheduledActionsRequest extends Request
{
    /**
     * @param array{
     *     maxResults?: int<1, 100>|null,
     *     namespaceName?: string|null,
     *     nextToken?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
