<?php

namespace Sunaoka\Aws\Structures\WAFV2\PutLoggingConfiguration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property All $All
 * @property list<string> $IncludedHeaders
 * @property list<string> $ExcludedHeaders
 */
class HeaderMatchPattern extends Shape
{
    /**
     * @param array{
     *     All?: All,
     *     IncludedHeaders?: list<string>,
     *     ExcludedHeaders?: list<string>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
