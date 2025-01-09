<?php

namespace Sunaoka\Aws\Structures\kendra\BatchGetDocumentStatus\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $DocumentId
 * @property string $DataSourceId
 * @property 'InternalError'|'InvalidRequest' $ErrorCode
 * @property string $ErrorMessage
 */
class BatchGetDocumentStatusResponseError extends Shape
{
    /**
     * @param array{
     *     DocumentId?: string,
     *     DataSourceId?: string,
     *     ErrorCode?: 'InternalError'|'InvalidRequest',
     *     ErrorMessage?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
