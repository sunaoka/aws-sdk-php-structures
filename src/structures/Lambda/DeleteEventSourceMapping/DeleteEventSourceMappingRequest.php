<?php

namespace Sunaoka\Aws\Structures\Lambda\DeleteEventSourceMapping;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $UUID
 */
class DeleteEventSourceMappingRequest extends Request
{
    /**
     * @param array{UUID: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
