<?php

namespace Sunaoka\Aws\Structures\IoTManagedIntegrations\DeleteOtaTask;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Identifier
 */
class DeleteOtaTaskRequest extends Request
{
    /**
     * @param array{Identifier: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
