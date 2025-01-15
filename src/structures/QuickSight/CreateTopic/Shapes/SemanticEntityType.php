<?php

namespace Sunaoka\Aws\Structures\QuickSight\CreateTopic\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $TypeName
 * @property string|null $SubTypeName
 * @property array<string, string>|null $TypeParameters
 */
class SemanticEntityType extends Shape
{
    /**
     * @param array{
     *     TypeName?: string|null,
     *     SubTypeName?: string|null,
     *     TypeParameters?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
