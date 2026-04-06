<?php

namespace Sunaoka\Aws\Structures\ObservabilityAdmin\GetTelemetryRuleForOrganization\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $LabelName
 */
class LabelNameCondition extends Shape
{
    /**
     * @param array{LabelName?: string|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
