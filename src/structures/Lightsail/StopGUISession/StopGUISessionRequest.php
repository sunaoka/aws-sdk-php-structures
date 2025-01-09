<?php

namespace Sunaoka\Aws\Structures\Lightsail\StopGUISession;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $resourceName
 */
class StopGUISessionRequest extends Request
{
    /**
     * @param array{resourceName: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
