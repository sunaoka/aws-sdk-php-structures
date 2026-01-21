<?php

namespace Sunaoka\Aws\Structures\WorkspacesInstances\ListInstanceTypes\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $InstanceType
 * @property list<SupportedInstanceConfiguration>|null $SupportedInstanceConfigurations
 */
class InstanceTypeInfo extends Shape
{
    /**
     * @param array{
     *     InstanceType?: string|null,
     *     SupportedInstanceConfigurations?: list<SupportedInstanceConfiguration>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
