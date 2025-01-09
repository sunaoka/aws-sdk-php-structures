<?php

namespace Sunaoka\Aws\Structures\Athena\ListCalculationExecutions;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $SessionId
 * @property 'CREATING'|'CREATED'|'QUEUED'|'RUNNING'|'CANCELING'|'CANCELED'|'COMPLETED'|'FAILED' $StateFilter
 * @property int<1, 100> $MaxResults
 * @property string $NextToken
 */
class ListCalculationExecutionsRequest extends Request
{
    /**
     * @param array{
     *     SessionId: string,
     *     StateFilter?: 'CREATING'|'CREATED'|'QUEUED'|'RUNNING'|'CANCELING'|'CANCELED'|'COMPLETED'|'FAILED',
     *     MaxResults?: int<1, 100>,
     *     NextToken?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
