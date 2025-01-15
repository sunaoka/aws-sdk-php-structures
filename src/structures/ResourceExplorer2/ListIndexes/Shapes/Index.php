<?php

namespace Sunaoka\Aws\Structures\ResourceExplorer2\ListIndexes\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Arn
 * @property string|null $Region
 * @property 'LOCAL'|'AGGREGATOR'|null $Type
 */
class Index extends Shape
{
    /**
     * @param array{
     *     Arn?: string|null,
     *     Region?: string|null,
     *     Type?: 'LOCAL'|'AGGREGATOR'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
