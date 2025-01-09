<?php

namespace Sunaoka\Aws\Structures\Lambda\GetEventSourceMapping;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $UUID
 */
class GetEventSourceMappingRequest extends Request
{
    /**
     * @param array{UUID: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
