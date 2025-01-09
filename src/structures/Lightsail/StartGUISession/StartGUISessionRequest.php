<?php

namespace Sunaoka\Aws\Structures\Lightsail\StartGUISession;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $resourceName
 */
class StartGUISessionRequest extends Request
{
    /**
     * @param array{resourceName: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
