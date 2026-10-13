<?php

namespace Sunaoka\Aws\Structures\Glue\PublishDataQualityResultV2\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'ALL'|'NONE'|null $ObservationsEnabled
 * @property 'SCHEDULED'|'FIXED'|null $ObservationMode
 */
class DataQualityConfigurationV2 extends Shape
{
    /**
     * @param array{
     *     ObservationsEnabled?: 'ALL'|'NONE'|null,
     *     ObservationMode?: 'SCHEDULED'|'FIXED'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
