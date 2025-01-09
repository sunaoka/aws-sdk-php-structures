<?php

namespace Sunaoka\Aws\Structures\Transfer\CreateWebApp\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<1, max> $Provisioned
 */
class WebAppUnits extends Shape
{
    /**
     * @param array{Provisioned?: int<1, max>} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
