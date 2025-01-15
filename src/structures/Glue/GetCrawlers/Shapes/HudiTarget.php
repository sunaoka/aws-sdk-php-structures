<?php

namespace Sunaoka\Aws\Structures\Glue\GetCrawlers\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string>|null $Paths
 * @property string|null $ConnectionName
 * @property list<string>|null $Exclusions
 * @property int|null $MaximumTraversalDepth
 */
class HudiTarget extends Shape
{
    /**
     * @param array{
     *     Paths?: list<string>|null,
     *     ConnectionName?: string|null,
     *     Exclusions?: list<string>|null,
     *     MaximumTraversalDepth?: int|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
