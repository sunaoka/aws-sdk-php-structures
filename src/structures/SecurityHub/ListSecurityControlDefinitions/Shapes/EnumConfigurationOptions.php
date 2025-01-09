<?php

namespace Sunaoka\Aws\Structures\SecurityHub\ListSecurityControlDefinitions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $DefaultValue
 * @property list<string> $AllowedValues
 */
class EnumConfigurationOptions extends Shape
{
    /**
     * @param array{
     *     DefaultValue?: string,
     *     AllowedValues?: list<string>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
