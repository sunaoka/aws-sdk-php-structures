<?php

namespace Sunaoka\Aws\Structures\SecurityHub\ListSecurityControlDefinitions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $DefaultValue
 * @property list<string>|null $AllowedValues
 */
class EnumConfigurationOptions extends Shape
{
    /**
     * @param array{
     *     DefaultValue?: string|null,
     *     AllowedValues?: list<string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
