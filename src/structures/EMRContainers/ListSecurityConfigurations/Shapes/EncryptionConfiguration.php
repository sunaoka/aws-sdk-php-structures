<?php

namespace Sunaoka\Aws\Structures\EMRContainers\ListSecurityConfigurations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property InTransitEncryptionConfiguration $inTransitEncryptionConfiguration
 */
class EncryptionConfiguration extends Shape
{
    /**
     * @param array{inTransitEncryptionConfiguration?: InTransitEncryptionConfiguration} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
