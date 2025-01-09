<?php

namespace Sunaoka\Aws\Structures\SecurityHub\BatchGetConfigurationPolicyAssociations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property Target $Target
 */
class ConfigurationPolicyAssociation extends Shape
{
    /**
     * @param array{Target?: Target} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
