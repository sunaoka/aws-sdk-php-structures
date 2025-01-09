<?php

namespace Sunaoka\Aws\Structures\GeoPlaces\Suggest\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $RefinedTerm
 * @property string $OriginalTerm
 * @property int<0, max> $StartIndex
 * @property int<0, max> $EndIndex
 */
class QueryRefinement extends Shape
{
    /**
     * @param array{
     *     RefinedTerm: string,
     *     OriginalTerm: string,
     *     StartIndex: int<0, max>,
     *     EndIndex: int<0, max>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
