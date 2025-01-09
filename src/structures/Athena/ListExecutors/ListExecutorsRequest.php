<?php

namespace Sunaoka\Aws\Structures\Athena\ListExecutors;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $SessionId
 * @property 'CREATING'|'CREATED'|'REGISTERED'|'TERMINATING'|'TERMINATED'|'FAILED' $ExecutorStateFilter
 * @property int<1, 100> $MaxResults
 * @property string $NextToken
 */
class ListExecutorsRequest extends Request
{
    /**
     * @param array{
     *     SessionId: string,
     *     ExecutorStateFilter?: 'CREATING'|'CREATED'|'REGISTERED'|'TERMINATING'|'TERMINATED'|'FAILED',
     *     MaxResults?: int<1, 100>,
     *     NextToken?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
