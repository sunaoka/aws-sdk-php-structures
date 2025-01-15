<?php

namespace Sunaoka\Aws\Structures\Neptune\DescribeValidDBInstanceModifications\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<ValidStorageOptions>|null $Storage
 */
class ValidDBInstanceModificationsMessage extends Shape
{
    /**
     * @param array{Storage?: list<ValidStorageOptions>|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
