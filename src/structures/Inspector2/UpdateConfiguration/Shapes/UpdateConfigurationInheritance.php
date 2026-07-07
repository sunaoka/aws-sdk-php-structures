<?php

namespace Sunaoka\Aws\Structures\Inspector2\UpdateConfiguration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'INHERIT_FROM_ADMIN'|null $ec2Configuration
 * @property 'INHERIT_FROM_ADMIN'|null $ecrConfiguration
 */
class UpdateConfigurationInheritance extends Shape
{
    /**
     * @param array{
     *     ec2Configuration?: 'INHERIT_FROM_ADMIN'|null,
     *     ecrConfiguration?: 'INHERIT_FROM_ADMIN'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
