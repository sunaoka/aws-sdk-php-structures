<?php

namespace Sunaoka\Aws\Structures\kendra\BatchGetDocumentStatus\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $DocumentId
 * @property 'NOT_FOUND'|'PROCESSING'|'INDEXED'|'UPDATED'|'FAILED'|'UPDATE_FAILED' $DocumentStatus
 * @property string $FailureCode
 * @property string $FailureReason
 */
class Status extends Shape
{
    /**
     * @param array{
     *     DocumentId?: string,
     *     DocumentStatus?: 'NOT_FOUND'|'PROCESSING'|'INDEXED'|'UPDATED'|'FAILED'|'UPDATE_FAILED',
     *     FailureCode?: string,
     *     FailureReason?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
