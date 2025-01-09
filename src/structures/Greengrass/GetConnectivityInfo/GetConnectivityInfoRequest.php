<?php

namespace Sunaoka\Aws\Structures\Greengrass\GetConnectivityInfo;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ThingName
 */
class GetConnectivityInfoRequest extends Request
{
    /**
     * @param array{ThingName: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
