<?php

namespace Sunaoka\Aws\Structures\QBusiness\BatchDeleteDocument\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $id
 * @property ErrorDetail|null $error
 * @property string|null $dataSourceId
 */
class FailedDocument extends Shape
{
    /**
     * @param array{
     *     id?: string|null,
     *     error?: ErrorDetail|null,
     *     dataSourceId?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
