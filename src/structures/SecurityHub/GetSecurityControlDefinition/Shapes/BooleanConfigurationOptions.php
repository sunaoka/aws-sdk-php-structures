<?php

namespace Sunaoka\Aws\Structures\SecurityHub\GetSecurityControlDefinition\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool $DefaultValue
 */
class BooleanConfigurationOptions extends Shape
{
    /**
     * @param array{DefaultValue?: bool} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
