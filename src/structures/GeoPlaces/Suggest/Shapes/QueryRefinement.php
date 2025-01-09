<?php

namespace Sunaoka\Aws\Structures\GeoPlaces\Suggest\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $RefinedTerm
 * @property string $OriginalTerm
 * @property int $StartIndex
 * @property int $EndIndex
 */
class QueryRefinement extends Shape
{
    /**
     * @param array{
     *     RefinedTerm: string,
     *     OriginalTerm: string,
     *     StartIndex: int,
     *     EndIndex: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
