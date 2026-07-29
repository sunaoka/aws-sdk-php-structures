<?php

namespace Sunaoka\Aws\Structures\IoTSiteWise\ListDatasets\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property DatasetEnrichmentEntry|null $video
 */
class DatasetEnrichment extends Shape
{
    /**
     * @param array{video?: DatasetEnrichmentEntry|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
