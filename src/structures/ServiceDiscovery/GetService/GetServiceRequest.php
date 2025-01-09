<?php

namespace Sunaoka\Aws\Structures\ServiceDiscovery\GetService;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Id
 */
class GetServiceRequest extends Request
{
    /**
     * @param array{Id: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
