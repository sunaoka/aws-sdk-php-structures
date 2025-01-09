<?php

namespace Sunaoka\Aws\Structures\CloudDirectory\BatchRead\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<IndexAttachment> $IndexAttachments
 * @property string $NextToken
 */
class BatchListAttachedIndicesResponse extends Shape
{
    /**
     * @param array{
     *     IndexAttachments?: list<IndexAttachment>,
     *     NextToken?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
