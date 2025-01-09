<?php

namespace Sunaoka\Aws\Structures\Ecs\UpdateTaskSet;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $cluster
 * @property string $service
 * @property string $taskSet
 * @property Shapes\Scale $scale
 */
class UpdateTaskSetRequest extends Request
{
    /**
     * @param array{
     *     cluster: string,
     *     service: string,
     *     taskSet: string,
     *     scale: Shapes\Scale
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
