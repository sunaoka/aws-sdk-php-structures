<?php

namespace Sunaoka\Aws\Structures\Batch\SubmitJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $targetNodes
 * @property ContainerOverrides|null $containerOverrides
 * @property EcsPropertiesOverride|null $ecsPropertiesOverride
 * @property list<string>|null $instanceTypes
 * @property EksPropertiesOverride|null $eksPropertiesOverride
 */
class NodePropertyOverride extends Shape
{
    /**
     * @param array{
     *     targetNodes: string,
     *     containerOverrides?: ContainerOverrides|null,
     *     ecsPropertiesOverride?: EcsPropertiesOverride|null,
     *     instanceTypes?: list<string>|null,
     *     eksPropertiesOverride?: EksPropertiesOverride|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
