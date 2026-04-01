<?php

namespace Sunaoka\Aws\Structures\DevOpsAgent\DeregisterService;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $serviceId
 */
class DeregisterServiceRequest extends Request
{
    /**
     * @param array{serviceId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
