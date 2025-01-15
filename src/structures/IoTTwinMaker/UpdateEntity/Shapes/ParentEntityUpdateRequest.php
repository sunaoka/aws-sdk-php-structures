<?php

namespace Sunaoka\Aws\Structures\IoTTwinMaker\UpdateEntity\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'UPDATE'|'DELETE' $updateType
 * @property string|null $parentEntityId
 */
class ParentEntityUpdateRequest extends Shape
{
    /**
     * @param array{
     *     updateType: 'UPDATE'|'DELETE',
     *     parentEntityId?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
