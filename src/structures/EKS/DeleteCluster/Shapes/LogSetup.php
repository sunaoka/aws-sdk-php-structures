<?php

namespace Sunaoka\Aws\Structures\EKS\DeleteCluster\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<'api'|'audit'|'authenticator'|'controllerManager'|'scheduler'> $types
 * @property bool $enabled
 */
class LogSetup extends Shape
{
    /**
     * @param array{
     *     types?: list<'api'|'audit'|'authenticator'|'controllerManager'|'scheduler'>,
     *     enabled?: bool
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
