<?php

namespace Sunaoka\Aws\Structures\EventBridge\DeleteApiDestination;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Name
 */
class DeleteApiDestinationRequest extends Request
{
    /**
     * @param array{Name: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
