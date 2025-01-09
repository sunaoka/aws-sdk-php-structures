<?php

namespace Sunaoka\Aws\Structures\kendra\UpdateDataSource\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $AllowedGroupsColumnName
 */
class AclConfiguration extends Shape
{
    /**
     * @param array{AllowedGroupsColumnName: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
