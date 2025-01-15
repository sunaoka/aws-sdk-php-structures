<?php

namespace Sunaoka\Aws\Structures\Kms\CreateKey\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Id
 */
class XksKeyConfigurationType extends Shape
{
    /**
     * @param array{Id?: string|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
