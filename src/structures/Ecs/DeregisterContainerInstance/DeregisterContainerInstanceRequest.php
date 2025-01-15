<?php

namespace Sunaoka\Aws\Structures\Ecs\DeregisterContainerInstance;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $cluster
 * @property string $containerInstance
 * @property bool|null $force
 */
class DeregisterContainerInstanceRequest extends Request
{
    /**
     * @param array{
     *     cluster?: string|null,
     *     containerInstance: string,
     *     force?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
