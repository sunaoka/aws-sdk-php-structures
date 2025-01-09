<?php

namespace Sunaoka\Aws\Structures\CleanRooms\PreviewPrivacyImpact\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<DifferentialPrivacyPreviewAggregation> $aggregations
 */
class DifferentialPrivacyPrivacyImpact extends Shape
{
    /**
     * @param array{aggregations: list<DifferentialPrivacyPreviewAggregation>} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
