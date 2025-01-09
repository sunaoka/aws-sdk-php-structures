<?php

namespace Sunaoka\Aws\Structures\QBusiness\BatchDeleteDocument\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $id
 * @property ErrorDetail $error
 * @property string $dataSourceId
 */
class FailedDocument extends Shape
{
    /**
     * @param array{
     *     id?: string,
     *     error?: ErrorDetail,
     *     dataSourceId?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
