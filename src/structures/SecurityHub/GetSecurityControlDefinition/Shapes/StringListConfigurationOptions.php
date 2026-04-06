<?php

namespace Sunaoka\Aws\Structures\SecurityHub\GetSecurityControlDefinition\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string>|null $DefaultValue
 * @property string|null $Re2Expression
 * @property int|null $MaxItems
 * @property string|null $ExpressionDescription
 */
class StringListConfigurationOptions extends Shape
{
    /**
     * @param array{
     *     DefaultValue?: list<string>|null,
     *     Re2Expression?: string|null,
     *     MaxItems?: int|null,
     *     ExpressionDescription?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
