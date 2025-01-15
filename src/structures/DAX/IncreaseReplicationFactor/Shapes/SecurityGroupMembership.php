<?php

namespace Sunaoka\Aws\Structures\DAX\IncreaseReplicationFactor\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $SecurityGroupIdentifier
 * @property string|null $Status
 */
class SecurityGroupMembership extends Shape
{
    /**
     * @param array{
     *     SecurityGroupIdentifier?: string|null,
     *     Status?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
