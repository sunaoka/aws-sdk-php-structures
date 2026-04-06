<?php

namespace Sunaoka\Aws\Structures\Transfer\UpdateWebApp\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<1, max>|null $Provisioned
 */
class WebAppUnits extends Shape
{
    /**
     * @param array{Provisioned?: int<1, max>|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
