<?php

namespace Sunaoka\Aws\Structures\SecurityHub\ListExportJobsV2\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'CSV'|'OCSF_JSON' $Format
 */
class FindingsOutputSummary extends Shape
{
    /**
     * @param array{Format: 'CSV'|'OCSF_JSON'} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
