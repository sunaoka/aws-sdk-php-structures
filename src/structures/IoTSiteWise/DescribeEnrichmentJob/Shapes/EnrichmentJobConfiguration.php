<?php

namespace Sunaoka\Aws\Structures\IoTSiteWise\DescribeEnrichmentJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property EventDetection|null $eventDetection
 */
class EnrichmentJobConfiguration extends Shape
{
    /**
     * @param array{eventDetection?: EventDetection|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
