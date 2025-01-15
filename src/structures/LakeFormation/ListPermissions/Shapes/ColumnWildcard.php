<?php

namespace Sunaoka\Aws\Structures\LakeFormation\ListPermissions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string>|null $ExcludedColumnNames
 */
class ColumnWildcard extends Shape
{
    /**
     * @param array{ExcludedColumnNames?: list<string>|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
