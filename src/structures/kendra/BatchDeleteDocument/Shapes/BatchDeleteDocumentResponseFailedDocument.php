<?php

namespace Sunaoka\Aws\Structures\kendra\BatchDeleteDocument\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Id
 * @property string|null $DataSourceId
 * @property 'InternalError'|'InvalidRequest'|null $ErrorCode
 * @property string|null $ErrorMessage
 */
class BatchDeleteDocumentResponseFailedDocument extends Shape
{
    /**
     * @param array{
     *     Id?: string|null,
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
