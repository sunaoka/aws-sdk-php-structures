<?php

namespace Sunaoka\Aws\Structures\Ecs\UpdateServicePrimaryTaskSet;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $cluster
 * @property string $service
 * @property string $primaryTaskSet
 */
class UpdateServicePrimaryTaskSetRequest extends Request
{
    /**
     * @param array{
     *     cluster: string,
     *     service: string,
     *     primaryTaskSet: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
