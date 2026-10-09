<?php

namespace Sunaoka\Aws\Structures\DevOpsAgent\GetAssociation\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $name
 * @property NetworkAccessConfiguration $networkAccess
 */
class ReleaseManagementConfiguration extends Shape
{
    /**
     * @param array{
     *     name: string,
     *     networkAccess: NetworkAccessConfiguration
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
