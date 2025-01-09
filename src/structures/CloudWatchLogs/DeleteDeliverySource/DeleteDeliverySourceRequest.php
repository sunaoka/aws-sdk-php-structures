<?php

namespace Sunaoka\Aws\Structures\CloudWatchLogs\DeleteDeliverySource;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $name
 */
class DeleteDeliverySourceRequest extends Request
{
    /**
     * @param array{name: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
