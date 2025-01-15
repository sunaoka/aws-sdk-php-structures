<?php

namespace Sunaoka\Aws\Structures\EKS\UpdateClusterConfig\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<'api'|'audit'|'authenticator'|'controllerManager'|'scheduler'>|null $types
 * @property bool|null $enabled
 */
class LogSetup extends Shape
{
    /**
     * @param array{
     *     types?: list<'api'|'audit'|'authenticator'|'controllerManager'|'scheduler'>|null,
     *     enabled?: bool|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
