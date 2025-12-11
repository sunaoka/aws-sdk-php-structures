<?php

namespace Sunaoka\Aws\Structures\QuickSight\CreateDataSource\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ApplicationArn
 */
class QBusinessParameters extends Shape
{
    /**
     * @param array{ApplicationArn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
