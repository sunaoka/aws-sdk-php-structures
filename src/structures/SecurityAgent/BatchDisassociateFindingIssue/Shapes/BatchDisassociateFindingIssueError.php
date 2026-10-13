<?php

namespace Sunaoka\Aws\Structures\SecurityAgent\BatchDisassociateFindingIssue\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $findingId
 * @property 'CLIENT_ERROR'|'INTERNAL_ERROR'|'STOPPED_BY_USER' $code
 * @property string $message
 */
class BatchDisassociateFindingIssueError extends Shape
{
    /**
     * @param array{
     *     findingId: string,
     *     code: 'CLIENT_ERROR'|'INTERNAL_ERROR'|'STOPPED_BY_USER',
     *     message: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
