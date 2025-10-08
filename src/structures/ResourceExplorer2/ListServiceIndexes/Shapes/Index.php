<?php

namespace Sunaoka\Aws\Structures\ResourceExplorer2\ListServiceIndexes\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Region
 * @property string|null $Arn
 * @property 'LOCAL'|'AGGREGATOR'|null $Type
 */
class Index extends Shape
{
    /**
     * @param array{
     *     Region?: string|null,
     *     Arn?: string|null,
     *     Type?: 'LOCAL'|'AGGREGATOR'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
