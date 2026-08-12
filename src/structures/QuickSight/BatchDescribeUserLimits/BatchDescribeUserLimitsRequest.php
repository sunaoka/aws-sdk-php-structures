<?php

namespace Sunaoka\Aws\Structures\QuickSight\BatchDescribeUserLimits;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $accountId
 * @property list<Shapes\UserLimitsEntry>|null $users
 * @property list<'INDEX_STORAGE'|'AGENT_HOURS'>|null $resourceTypes
 */
class BatchDescribeUserLimitsRequest extends Request
{
    /**
     * @param array{
     *     accountId: string,
     *     users?: list<Shapes\UserLimitsEntry>|null,
     *     resourceTypes?: list<'INDEX_STORAGE'|'AGENT_HOURS'>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
