<?php

namespace Sunaoka\Aws\Structures\ServiceDiscovery\DeleteService;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Id
 */
class DeleteServiceRequest extends Request
{
    /**
     * @param array{Id: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
