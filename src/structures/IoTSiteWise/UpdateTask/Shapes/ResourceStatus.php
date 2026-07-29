<?php

namespace Sunaoka\Aws\Structures\IoTSiteWise\UpdateTask\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ResourceError|null $error
 * @property 'CREATING'|'ACTIVE'|'UPDATING'|'DELETING'|'FAILED'|null $state
 */
class ResourceStatus extends Shape
{
    /**
     * @param array{
     *     error?: ResourceError|null,
     *     state?: 'CREATING'|'ACTIVE'|'UPDATING'|'DELETING'|'FAILED'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
