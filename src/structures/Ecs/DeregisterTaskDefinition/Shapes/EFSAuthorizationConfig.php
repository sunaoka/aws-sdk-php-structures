<?php

namespace Sunaoka\Aws\Structures\Ecs\DeregisterTaskDefinition\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $accessPointId
 * @property 'ENABLED'|'DISABLED'|null $iam
 */
class EFSAuthorizationConfig extends Shape
{
    /**
     * @param array{
     *     accessPointId?: string|null,
     *     iam?: 'ENABLED'|'DISABLED'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
