<?php

namespace Sunaoka\Aws\Structures\ObservabilityAdmin\CreateCentralizationRuleForOrganization\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $MetricsSelectionCriteria
 */
class SourceMetricsConfiguration extends Shape
{
    /**
     * @param array{MetricsSelectionCriteria?: string|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
