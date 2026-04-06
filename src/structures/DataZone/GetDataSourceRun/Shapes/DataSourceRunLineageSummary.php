<?php

namespace Sunaoka\Aws\Structures\DataZone\GetDataSourceRun\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'IN_PROGRESS'|'SUCCESS'|'FAILED'|'PARTIALLY_SUCCEEDED'|null $importStatus
 */
class DataSourceRunLineageSummary extends Shape
{
    /**
     * @param array{importStatus?: 'IN_PROGRESS'|'SUCCESS'|'FAILED'|'PARTIALLY_SUCCEEDED'|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
