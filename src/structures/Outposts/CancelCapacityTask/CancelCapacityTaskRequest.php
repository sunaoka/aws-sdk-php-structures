<?php

namespace Sunaoka\Aws\Structures\Outposts\CancelCapacityTask;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $CapacityTaskId
 * @property string $OutpostIdentifier
 */
class CancelCapacityTaskRequest extends Request
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
