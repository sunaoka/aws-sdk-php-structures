<?php

namespace Sunaoka\Aws\Structures\Iot\GetThingConnectivityData;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $thingName
 */
class GetThingConnectivityDataRequest extends Request
{
    /**
     * @param array{thingName: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
