<?php

namespace Sunaoka\Aws\Structures\BedrockAgent\ListIngestionJobs\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'STATUS'|'STARTED_AT' $attribute
 * @property 'ASCENDING'|'DESCENDING' $order
 */
class IngestionJobSortBy extends Shape
{
    /**
     * @param array{
     *     attribute: 'STATUS'|'STARTED_AT',
     *     order: 'ASCENDING'|'DESCENDING'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
