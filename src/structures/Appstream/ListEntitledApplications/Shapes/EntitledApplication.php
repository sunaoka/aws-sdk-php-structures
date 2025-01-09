<?php

namespace Sunaoka\Aws\Structures\Appstream\ListEntitledApplications\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ApplicationIdentifier
 */
class EntitledApplication extends Shape
{
    /**
     * @param array{ApplicationIdentifier: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
