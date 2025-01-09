<?php

namespace Sunaoka\Aws\Structures\ServiceDiscovery\GetServiceAttributes;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ServiceId
 */
class GetServiceAttributesRequest extends Request
{
    /**
     * @param array{ServiceId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
