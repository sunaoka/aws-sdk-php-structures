<?php

namespace Sunaoka\Aws\Structures\Deadline\ListBudgets;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $nextToken
 * @property string $farmId
 * @property int $maxResults
 * @property 'ACTIVE'|'INACTIVE' $status
 */
class ListBudgetsRequest extends Request
{
    /**
     * @param array{
     *     nextToken?: string,
     *     farmId: string,
     *     maxResults?: int,
     *     status?: 'ACTIVE'|'INACTIVE'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
