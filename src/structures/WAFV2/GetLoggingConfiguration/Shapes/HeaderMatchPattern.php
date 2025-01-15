<?php

namespace Sunaoka\Aws\Structures\WAFV2\GetLoggingConfiguration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property All|null $All
 * @property list<string>|null $IncludedHeaders
 * @property list<string>|null $ExcludedHeaders
 */
class HeaderMatchPattern extends Shape
{
    /**
     * @param array{
     *     All?: All|null,
     *     IncludedHeaders?: list<string>|null,
     *     ExcludedHeaders?: list<string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
