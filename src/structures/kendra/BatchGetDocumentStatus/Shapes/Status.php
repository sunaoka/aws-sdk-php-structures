<?php

namespace Sunaoka\Aws\Structures\kendra\BatchGetDocumentStatus\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $DocumentId
 * @property 'NOT_FOUND'|'PROCESSING'|'INDEXED'|'UPDATED'|'FAILED'|'UPDATE_FAILED'|null $DocumentStatus
 * @property string|null $FailureCode
 * @property string|null $FailureReason
 */
class Status extends Shape
{
    /**
     * @param array{
     *     DocumentId?: string|null,
     *     DocumentStatus?: 'NOT_FOUND'|'PROCESSING'|'INDEXED'|'UPDATED'|'FAILED'|'UPDATE_FAILED'|null,
     *     FailureCode?: string|null,
     *     FailureReason?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
