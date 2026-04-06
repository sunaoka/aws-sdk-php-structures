<?php

namespace Sunaoka\Aws\Structures\NetworkFirewall\GetAnalysisReportResults\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int|null $Count
 */
class Hits extends Shape
{
    /**
     * @param array{Count?: int|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
