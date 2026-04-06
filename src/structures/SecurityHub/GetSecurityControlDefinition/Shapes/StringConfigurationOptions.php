<?php

namespace Sunaoka\Aws\Structures\SecurityHub\GetSecurityControlDefinition\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $DefaultValue
 * @property string|null $Re2Expression
 * @property string|null $ExpressionDescription
 */
class StringConfigurationOptions extends Shape
{
    /**
     * @param array{
     *     DefaultValue?: string|null,
     *     Re2Expression?: string|null,
     *     ExpressionDescription?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
