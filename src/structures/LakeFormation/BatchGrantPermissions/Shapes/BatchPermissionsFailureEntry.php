<?php

namespace Sunaoka\Aws\Structures\LakeFormation\BatchGrantPermissions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property BatchPermissionsRequestEntry $RequestEntry
 * @property ErrorDetail $Error
 */
class BatchPermissionsFailureEntry extends Shape
{
    /**
     * @param array{
     *     RequestEntry?: BatchPermissionsRequestEntry,
     *     Error?: ErrorDetail
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
