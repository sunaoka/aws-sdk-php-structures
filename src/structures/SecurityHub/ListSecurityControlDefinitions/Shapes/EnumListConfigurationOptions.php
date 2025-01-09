<?php

namespace Sunaoka\Aws\Structures\SecurityHub\ListSecurityControlDefinitions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string> $DefaultValue
 * @property int $MaxItems
 * @property list<string> $AllowedValues
 */
class EnumListConfigurationOptions extends Shape
{
    /**
     * @param array{
     *     DefaultValue?: list<string>,
     *     MaxItems?: int,
     *     AllowedValues?: list<string>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
