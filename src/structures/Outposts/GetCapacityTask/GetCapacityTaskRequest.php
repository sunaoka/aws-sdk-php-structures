<?php

namespace Sunaoka\Aws\Structures\Outposts\GetCapacityTask;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $CapacityTaskId
 * @property string $OutpostIdentifier
 */
class GetCapacityTaskRequest extends Request
{
    /**
     * @param array{
     *     CapacityTaskId: string,
     *     OutpostIdentifier: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
