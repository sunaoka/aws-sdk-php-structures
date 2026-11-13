<?php

namespace Sunaoka\Aws\Structures\SecretsManager\ListResourcePolicies\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $PolicyName
 */
class ResourcePolicySummary extends Shape
{
    /**
     * @param array{PolicyName?: string|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
