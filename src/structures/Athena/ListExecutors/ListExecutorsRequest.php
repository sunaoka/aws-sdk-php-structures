<?php

namespace Sunaoka\Aws\Structures\Athena\ListExecutors;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $SessionId
 * @property 'CREATING'|'CREATED'|'REGISTERED'|'TERMINATING'|'TERMINATED'|'FAILED'|null $ExecutorStateFilter
 * @property int<1, 100>|null $MaxResults
 * @property string|null $NextToken
 */
class ListExecutorsRequest extends Request
{
    /**
     * @param array{
     *     SessionId: string,
     *     ExecutorStateFilter?: 'CREATING'|'CREATED'|'REGISTERED'|'TERMINATING'|'TERMINATED'|'FAILED'|null,
     *     MaxResults?: int<1, 100>|null,
     *     NextToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
