<?php

namespace Sunaoka\Aws\Structures\ObservabilityAdmin\UpdateCentralizationRuleForOrganization\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $ProfilesSelectionCriteria
 */
class SourceProfilesConfiguration extends Shape
{
    /**
     * @param array{ProfilesSelectionCriteria?: string|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
