<?php

namespace Sunaoka\Aws\Structures\Neptune\DescribeValidDBInstanceModifications\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<ValidStorageOptions> $Storage
 */
class ValidDBInstanceModificationsMessage extends Shape
{
    /**
     * @param array{Storage?: list<ValidStorageOptions>} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
