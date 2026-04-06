<?php

namespace Sunaoka\Aws\Structures\SecurityHub\ListSecurityControlDefinitions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string>|null $DefaultValue
 * @property int|null $MaxItems
 * @property list<string>|null $AllowedValues
 */
class EnumListConfigurationOptions extends Shape
{
    /**
     * @param array{
     *     DefaultValue?: list<string>|null,
     *     MaxItems?: int|null,
     *     AllowedValues?: list<string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
