<?php

namespace Sunaoka\Aws\Structures\QuickSight\UpdateTopic\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $TypeName
 * @property string $SubTypeName
 * @property array<string, string> $TypeParameters
 */
class SemanticEntityType extends Shape
{
    /**
     * @param array{
     *     TypeName?: string,
     *     SubTypeName?: string,
     *     TypeParameters?: array<string, string>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
