<?php

namespace Sunaoka\Aws\Structures\kendra\BatchPutDocument\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Id
 * @property string $DataSourceId
 * @property 'InternalError'|'InvalidRequest' $ErrorCode
 * @property string $ErrorMessage
 */
class BatchPutDocumentResponseFailedDocument extends Shape
{
    /**
     * @param array{
     *     Id?: string,
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
