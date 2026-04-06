<?php

namespace Sunaoka\Aws\Structures\Connect\SendOutboundEmail\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property array<string, string>|null $CustomAttributes
 * @property string|null $CustomerProfileAttributes
 */
class TemplateAttributes extends Shape
{
    /**
     * @param array{
     *     CustomAttributes?: array<string, string>|null,
     *     CustomerProfileAttributes?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
