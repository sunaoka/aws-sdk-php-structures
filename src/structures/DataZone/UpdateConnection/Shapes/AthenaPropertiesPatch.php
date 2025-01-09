<?php

namespace Sunaoka\Aws\Structures\DataZone\UpdateConnection\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $workgroupName
 */
class AthenaPropertiesPatch extends Shape
{
    /**
     * @param array{workgroupName?: string} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
