<?php

namespace Sunaoka\Aws\Structures\CleanRooms\PreviewPrivacyImpact\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'AVG'|'COUNT'|'COUNT_DISTINCT'|'SUM'|'STDDEV' $type
 * @property int<0, max> $maxCount
 */
class DifferentialPrivacyPreviewAggregation extends Shape
{
    /**
     * @param array{
     *     type: 'AVG'|'COUNT'|'COUNT_DISTINCT'|'SUM'|'STDDEV',
     *     maxCount: int<0, max>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
