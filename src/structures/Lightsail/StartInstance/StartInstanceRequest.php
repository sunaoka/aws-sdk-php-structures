<?php

namespace Sunaoka\Aws\Structures\Lightsail\StartInstance;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $instanceName
 * @property Shapes\InstanceAttributeUpdates|null $attributeUpdates
 */
class StartInstanceRequest extends Request
{
    /**
     * @param array{
     *     instanceName: string,
     *     attributeUpdates?: Shapes\InstanceAttributeUpdates|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
