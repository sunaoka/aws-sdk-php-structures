<?php

namespace Sunaoka\Aws\Structures\RedshiftServerless\ListScheduledActions;

use Sunaoka\Aws\Structures\Request;

/**
 * @property int $maxResults
 * @property string $namespaceName
 * @property string $nextToken
 */
class ListScheduledActionsRequest extends Request
{
    /**
     * @param array{
     *     maxResults?: int,
     *     namespaceName?: string,
     *     nextToken?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
