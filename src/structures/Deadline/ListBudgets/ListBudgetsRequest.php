<?php

namespace Sunaoka\Aws\Structures\Deadline\ListBudgets;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $farmId
 * @property int<1, 100>|null $maxResults
 * @property string|null $nextToken
 * @property 'ACTIVE'|'INACTIVE'|null $status
 */
class ListBudgetsRequest extends Request
{
    /**
     * @param array{
     *     farmId: string,
     *     maxResults?: int<1, 100>|null,
     *     nextToken?: string|null,
     *     status?: 'ACTIVE'|'INACTIVE'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
