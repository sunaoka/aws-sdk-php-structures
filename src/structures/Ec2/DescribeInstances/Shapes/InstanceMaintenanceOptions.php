<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeInstances\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'disabled'|'default'|null $AutoRecovery
 * @property 'disabled'|'default'|null $RebootMigration
 */
class InstanceMaintenanceOptions extends Shape
{
    /**
     * @param array{
     *     AutoRecovery?: 'disabled'|'default'|null,
     *     RebootMigration?: 'disabled'|'default'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
