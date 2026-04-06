<?php

namespace Sunaoka\Aws\Structures\CloudWatchLogs\GetDeliverySource;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $name
 */
class GetDeliverySourceRequest extends Request
{
    /**
     * @param array{name: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
