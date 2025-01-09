<?php

namespace Sunaoka\Aws\Structures\CustomerProfiles\PutIntegration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Object
 */
class MarketoSourceProperties extends Shape
{
    /**
     * @param array{Object: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
