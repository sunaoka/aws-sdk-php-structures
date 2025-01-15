<?php

namespace Sunaoka\Aws\Structures\Lambda\CreateFunction\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'PublishedVersions'|'None'|null $ApplyOn
 */
class SnapStart extends Shape
{
    /**
     * @param array{ApplyOn?: 'PublishedVersions'|'None'|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
