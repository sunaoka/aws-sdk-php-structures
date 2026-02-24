<?php

namespace Sunaoka\Aws\Structures\ObservabilityAdmin\UpdateCentralizationRuleForOrganization\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $LogGroupNamePattern
 */
class LogGroupNameConfiguration extends Shape
{
    /**
     * @param array{LogGroupNamePattern: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
