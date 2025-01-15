<?php

namespace Sunaoka\Aws\Structures\LakeFormation\BatchGrantPermissions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property BatchPermissionsRequestEntry|null $RequestEntry
 * @property ErrorDetail|null $Error
 */
class BatchPermissionsFailureEntry extends Shape
{
    /**
     * @param array{
     *     RequestEntry?: BatchPermissionsRequestEntry|null,
     *     Error?: ErrorDetail|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
