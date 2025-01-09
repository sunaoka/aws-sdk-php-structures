<?php

namespace Sunaoka\Aws\Structures\Glue\BatchDeleteTableVersion\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $TableName
 * @property string $VersionId
 * @property ErrorDetail $ErrorDetail
 */
class TableVersionError extends Shape
{
    /**
     * @param array{
     *     TableName?: string,
     *     VersionId?: string,
     *     ErrorDetail?: ErrorDetail
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
