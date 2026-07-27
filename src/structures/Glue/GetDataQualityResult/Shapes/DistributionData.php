<?php

namespace Sunaoka\Aws\Structures\Glue\GetDataQualityResult\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string>|null $BinEdges
 * @property list<int>|null $Count
 * @property string|null $DataType
 */
class DistributionData extends Shape
{
    /**
     * @param array{
     *     BinEdges?: list<string>|null,
     *     Count?: list<int>|null,
     *     DataType?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
