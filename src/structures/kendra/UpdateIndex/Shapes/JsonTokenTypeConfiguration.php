<?php

namespace Sunaoka\Aws\Structures\kendra\UpdateIndex\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $UserNameAttributeField
 * @property string $GroupAttributeField
 */
class JsonTokenTypeConfiguration extends Shape
{
    /**
     * @param array{
     *     UserNameAttributeField: string,
     *     GroupAttributeField: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
