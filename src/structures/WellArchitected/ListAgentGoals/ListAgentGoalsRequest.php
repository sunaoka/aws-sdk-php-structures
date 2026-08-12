<?php

namespace Sunaoka\Aws\Structures\WellArchitected\ListAgentGoals;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $profileArn
 * @property int<1, 1000>|null $maxResults
 * @property string|null $nextToken
 */
class ListAgentGoalsRequest extends Request
{
    /**
     * @param array{
     *     profileArn: string,
     *     maxResults?: int<1, 1000>|null,
     *     nextToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
