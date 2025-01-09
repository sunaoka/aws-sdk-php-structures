<?php

namespace Sunaoka\Aws\Structures\QuickSight\CreateTemplate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property WordCloudAggregatedFieldWells $WordCloudAggregatedFieldWells
 */
class WordCloudFieldWells extends Shape
{
    /**
     * @param array{WordCloudAggregatedFieldWells?: WordCloudAggregatedFieldWells} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
