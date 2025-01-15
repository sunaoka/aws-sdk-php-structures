<?php

namespace Sunaoka\Aws\Structures\MigrationHubRefactorSpaces\CreateRoute\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'ACTIVE'|'INACTIVE'|null $ActivationState
 */
class DefaultRouteInput extends Shape
{
    /**
     * @param array{ActivationState?: 'ACTIVE'|'INACTIVE'|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
