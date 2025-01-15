<?php

namespace Sunaoka\Aws\Structures\Ecs\DeleteTaskSet;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $cluster
 * @property string $service
 * @property string $taskSet
 * @property bool|null $force
 */
class DeleteTaskSetRequest extends Request
{
    /**
     * @param array{
     *     cluster: string,
     *     service: string,
     *     taskSet: string,
     *     force?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
