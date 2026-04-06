<?php

namespace Sunaoka\Aws\Structures\Deadline\ListBudgets;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $nextToken
 * @property string $farmId
 * @property int<1, 100>|null $maxResults
 * @property 'ACTIVE'|'INACTIVE'|null $status
 */
class ListBudgetsRequest extends Request
{
    /**
     * @param array{
     *     nextToken?: string|null,
     *     farmId: string,
     *     maxResults?: int<1, 100>|null,
     *     status?: 'ACTIVE'|'INACTIVE'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
