<?php

namespace Sunaoka\Aws\Structures\DataZone\ListDataSourceRuns\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'IN_PROGRESS'|'SUCCESS'|'FAILED'|'PARTIALLY_SUCCEEDED' $importStatus
 */
class DataSourceRunLineageSummary extends Shape
{
    /**
     * @param array{importStatus?: 'IN_PROGRESS'|'SUCCESS'|'FAILED'|'PARTIALLY_SUCCEEDED'} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
