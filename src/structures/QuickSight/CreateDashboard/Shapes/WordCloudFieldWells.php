<?php

namespace Sunaoka\Aws\Structures\QuickSight\CreateDashboard\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property WordCloudAggregatedFieldWells|null $WordCloudAggregatedFieldWells
 */
class WordCloudFieldWells extends Shape
{
    /**
     * @param array{WordCloudAggregatedFieldWells?: WordCloudAggregatedFieldWells|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
