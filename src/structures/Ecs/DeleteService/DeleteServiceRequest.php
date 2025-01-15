<?php

namespace Sunaoka\Aws\Structures\Ecs\DeleteService;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $cluster
 * @property string $service
 * @property bool|null $force
 */
class DeleteServiceRequest extends Request
{
    /**
     * @param array{
     *     cluster?: string|null,
     *     service: string,
     *     force?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
