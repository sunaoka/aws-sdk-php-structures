<?php

namespace Sunaoka\Aws\Structures\DevOpsAgent\GetService;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $serviceId
 */
class GetServiceRequest extends Request
{
    /**
     * @param array{serviceId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
