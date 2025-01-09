<?php

namespace Sunaoka\Aws\Structures\Ecs\DeregisterContainerInstance;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $cluster
 * @property string $containerInstance
 * @property bool $force
 */
class DeregisterContainerInstanceRequest extends Request
{
    /**
     * @param array{
     *     cluster?: string,
     *     containerInstance: string,
     *     force?: bool
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
