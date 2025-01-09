<?php

namespace Sunaoka\Aws\Structures\Ecs\DeleteService;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $cluster
 * @property string $service
 * @property bool $force
 */
class DeleteServiceRequest extends Request
{
    /**
     * @param array{
     *     cluster?: string,
     *     service: string,
     *     force?: bool
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
