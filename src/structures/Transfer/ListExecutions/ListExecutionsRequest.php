<?php

namespace Sunaoka\Aws\Structures\Transfer\ListExecutions;

use Sunaoka\Aws\Structures\Request;

/**
 * @property int<1, 1000>|null $MaxResults
 * @property string|null $NextToken
 * @property string $WorkflowId
 */
class ListExecutionsRequest extends Request
{
    /**
     * @param array{
     *     MaxResults?: int<1, 1000>|null,
     *     NextToken?: string|null,
     *     WorkflowId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
