<?php

namespace Sunaoka\Aws\Structures\kendra\BatchGetDocumentStatus\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $DocumentId
 * @property string|null $DataSourceId
 * @property 'InternalError'|'InvalidRequest'|null $ErrorCode
 * @property string|null $ErrorMessage
 */
class BatchGetDocumentStatusResponseError extends Shape
{
    /**
     * @param array{
     *     DocumentId?: string|null,
     *     DataSourceId?: string|null,
     *     ErrorCode?: 'InternalError'|'InvalidRequest'|null,
     *     ErrorMessage?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
