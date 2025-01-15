<?php

namespace Sunaoka\Aws\Structures\CloudDirectory\BatchRead\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<IndexAttachment>|null $IndexAttachments
 * @property string|null $NextToken
 */
class BatchListAttachedIndicesResponse extends Shape
{
    /**
     * @param array{
     *     IndexAttachments?: list<IndexAttachment>|null,
     *     NextToken?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
