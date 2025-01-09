<?php

namespace Sunaoka\Aws\Structures\ServiceDiscovery\UpdateService;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Id
 * @property Shapes\ServiceChange $Service
 */
class UpdateServiceRequest extends Request
{
    /**
     * @param array{
     *     Id: string,
     *     Service: Shapes\ServiceChange
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
