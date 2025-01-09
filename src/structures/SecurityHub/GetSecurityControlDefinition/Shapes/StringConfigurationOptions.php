<?php

namespace Sunaoka\Aws\Structures\SecurityHub\GetSecurityControlDefinition\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $DefaultValue
 * @property string $Re2Expression
 * @property string $ExpressionDescription
 */
class StringConfigurationOptions extends Shape
{
    /**
     * @param array{
     *     DefaultValue?: string,
     *     Re2Expression?: string,
     *     ExpressionDescription?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
