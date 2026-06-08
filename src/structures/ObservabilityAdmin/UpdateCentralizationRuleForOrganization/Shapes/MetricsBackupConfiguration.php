<?php

namespace Sunaoka\Aws\Structures\ObservabilityAdmin\UpdateCentralizationRuleForOrganization\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Region
 */
class MetricsBackupConfiguration extends Shape
{
    /**
     * @param array{Region: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
