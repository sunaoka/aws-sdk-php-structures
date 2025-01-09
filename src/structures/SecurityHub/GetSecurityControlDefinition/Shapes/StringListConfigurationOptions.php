<?php

namespace Sunaoka\Aws\Structures\SecurityHub\GetSecurityControlDefinition\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string> $DefaultValue
 * @property string $Re2Expression
 * @property int $MaxItems
 * @property string $ExpressionDescription
 */
class StringListConfigurationOptions extends Shape
{
    /**
     * @param array{
     *     DefaultValue?: list<string>,
     *     Re2Expression?: string,
     *     MaxItems?: int,
     *     ExpressionDescription?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
