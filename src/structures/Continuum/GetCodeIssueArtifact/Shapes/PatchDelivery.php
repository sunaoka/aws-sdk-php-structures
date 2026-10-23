<?php

namespace Sunaoka\Aws\Structures\Continuum\GetCodeIssueArtifact\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'PENDING'|'SUCCEEDED'|'FAILED'|'SKIPPED'|'ABANDONED' $status
 * @property DestinationTarget|null $target
 * @property \Aws\Api\DateTimeResult $updatedAt
 */
class PatchDelivery extends Shape
{
    /**
     * @param array{
     *     status: 'PENDING'|'SUCCEEDED'|'FAILED'|'SKIPPED'|'ABANDONED',
     *     target?: DestinationTarget|null,
     *     updatedAt: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
