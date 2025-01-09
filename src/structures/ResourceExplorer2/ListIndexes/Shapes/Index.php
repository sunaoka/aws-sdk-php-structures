<?php

namespace Sunaoka\Aws\Structures\ResourceExplorer2\ListIndexes\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Arn
 * @property string $Region
 * @property 'LOCAL'|'AGGREGATOR' $Type
 */
class Index extends Shape
{
    /**
     * @param array{
     *     Arn?: string,
     *     Region?: string,
     *     Type?: 'LOCAL'|'AGGREGATOR'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
