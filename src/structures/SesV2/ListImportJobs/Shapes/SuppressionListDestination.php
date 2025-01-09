<?php

namespace Sunaoka\Aws\Structures\SesV2\ListImportJobs\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'DELETE'|'PUT' $SuppressionListImportAction
 */
class SuppressionListDestination extends Shape
{
    /**
     * @param array{SuppressionListImportAction: 'DELETE'|'PUT'} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
