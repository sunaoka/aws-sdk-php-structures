<?php

namespace Sunaoka\Aws\Structures\WAFV2\UpdateWebACL\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<ApplicationAttribute>|null $Attributes
 */
class ApplicationConfig extends Shape
{
    /**
     * @param array{Attributes?: list<ApplicationAttribute>|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
