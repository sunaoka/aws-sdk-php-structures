<?php

namespace Sunaoka\Aws\Structures\SesV2\GetEmailAddressInsights\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'LOW'|'MEDIUM'|'HIGH'|null $ConfidenceVerdict
 */
class EmailAddressInsightsVerdict extends Shape
{
    /**
     * @param array{ConfidenceVerdict?: 'LOW'|'MEDIUM'|'HIGH'|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
