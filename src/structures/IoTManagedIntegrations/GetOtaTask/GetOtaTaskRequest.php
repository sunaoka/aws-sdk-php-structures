<?php

namespace Sunaoka\Aws\Structures\IoTManagedIntegrations\GetOtaTask;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Identifier
 */
class GetOtaTaskRequest extends Request
{
    /**
     * @param array{Identifier: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
