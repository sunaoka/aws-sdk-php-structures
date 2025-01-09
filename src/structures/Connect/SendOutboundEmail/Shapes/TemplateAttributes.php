<?php

namespace Sunaoka\Aws\Structures\Connect\SendOutboundEmail\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property array<string, string> $CustomAttributes
 * @property string $CustomerProfileAttributes
 */
class TemplateAttributes extends Shape
{
    /**
     * @param array{
     *     CustomAttributes?: array<string, string>,
     *     CustomerProfileAttributes?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
