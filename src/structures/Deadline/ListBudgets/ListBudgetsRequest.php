<?php

namespace Sunaoka\Aws\Structures\Deadline\ListBudgets;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $nextToken
 * @property string $farmId
 * @property int<1, 100> $maxResults
 * @property 'ACTIVE'|'INACTIVE' $status
 */
class ListBudgetsRequest extends Request
{
    /**
     * @param array{
     *     nextToken?: string,
     *     farmId: string,
     *     maxResults?: int<1, 100>,
     *     status?: 'ACTIVE'|'INACTIVE'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
