<?php

namespace Sunaoka\Aws\Structures\IoTRoboRunner\DeleteWorker;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $id
 */
class DeleteWorkerRequest extends Request
{
    /**
     * @param array{id: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
