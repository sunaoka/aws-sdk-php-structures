<?php

namespace Sunaoka\Aws\Structures\SecurityHub\BatchGetConfigurationPolicyAssociations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property Target|null $Target
 */
class ConfigurationPolicyAssociation extends Shape
{
    /**
     * @param array{Target?: Target|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
