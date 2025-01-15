<?php

namespace Sunaoka\Aws\Structures\SecurityHub\GetSecurityControlDefinition\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool|null $DefaultValue
 */
class BooleanConfigurationOptions extends Shape
{
    /**
     * @param array{DefaultValue?: bool|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
