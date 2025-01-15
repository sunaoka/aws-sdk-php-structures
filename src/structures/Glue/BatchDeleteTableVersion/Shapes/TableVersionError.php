<?php

namespace Sunaoka\Aws\Structures\Glue\BatchDeleteTableVersion\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $TableName
 * @property string|null $VersionId
 * @property ErrorDetail|null $ErrorDetail
 */
class TableVersionError extends Shape
{
    /**
     * @param array{
     *     TableName?: string|null,
     *     VersionId?: string|null,
     *     ErrorDetail?: ErrorDetail|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
