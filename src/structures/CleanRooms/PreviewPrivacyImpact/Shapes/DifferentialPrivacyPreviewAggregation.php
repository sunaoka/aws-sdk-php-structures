<?php

namespace Sunaoka\Aws\Structures\CleanRooms\PreviewPrivacyImpact\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'AVG'|'COUNT'|'COUNT_DISTINCT'|'SUM'|'STDDEV' $type
 * @property int $maxCount
 */
class DifferentialPrivacyPreviewAggregation extends Shape
{
    /**
     * @param array{
     *     type: 'AVG'|'COUNT'|'COUNT_DISTINCT'|'SUM'|'STDDEV',
     *     maxCount: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
