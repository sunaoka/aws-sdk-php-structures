<?php

namespace Sunaoka\Aws\Structures\Lambda\UpdateFunctionConfiguration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'PublishedVersions'|'None' $ApplyOn
 */
class SnapStart extends Shape
{
    /**
     * @param array{ApplyOn?: 'PublishedVersions'|'None'} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
