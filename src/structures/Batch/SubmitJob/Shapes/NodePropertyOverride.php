<?php

namespace Sunaoka\Aws\Structures\Batch\SubmitJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $targetNodes
 * @property ContainerOverrides $containerOverrides
 * @property EcsPropertiesOverride $ecsPropertiesOverride
 * @property list<string> $instanceTypes
 * @property EksPropertiesOverride $eksPropertiesOverride
 */
class NodePropertyOverride extends Shape
{
    /**
     * @param array{
     *     targetNodes: string,
     *     containerOverrides?: ContainerOverrides,
     *     ecsPropertiesOverride?: EcsPropertiesOverride,
     *     instanceTypes?: list<string>,
     *     eksPropertiesOverride?: EksPropertiesOverride
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
