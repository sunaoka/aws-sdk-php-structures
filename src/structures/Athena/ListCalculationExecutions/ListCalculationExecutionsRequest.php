<?php

namespace Sunaoka\Aws\Structures\Athena\ListCalculationExecutions;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $SessionId
 * @property 'CREATING'|'CREATED'|'QUEUED'|'RUNNING'|'CANCELING'|'CANCELED'|'COMPLETED'|'FAILED'|null $StateFilter
 * @property int<1, 100>|null $MaxResults
 * @property string|null $NextToken
 */
class ListCalculationExecutionsRequest extends Request
{
    /**
     * @param array{
     *     SessionId: string,
     *     StateFilter?: 'CREATING'|'CREATED'|'QUEUED'|'RUNNING'|'CANCELING'|'CANCELED'|'COMPLETED'|'FAILED'|null,
     *     MaxResults?: int<1, 100>|null,
     *     NextToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
