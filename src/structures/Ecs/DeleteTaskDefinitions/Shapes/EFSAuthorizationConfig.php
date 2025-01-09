<?php

namespace Sunaoka\Aws\Structures\Ecs\DeleteTaskDefinitions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $accessPointId
 * @property 'ENABLED'|'DISABLED' $iam
 */
class EFSAuthorizationConfig extends Shape
{
    /**
     * @param array{
     *     accessPointId?: string,
     *     iam?: 'ENABLED'|'DISABLED'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
