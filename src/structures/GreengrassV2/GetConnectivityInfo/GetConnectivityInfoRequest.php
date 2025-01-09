<?php

namespace Sunaoka\Aws\Structures\GreengrassV2\GetConnectivityInfo;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $thingName
 */
class GetConnectivityInfoRequest extends Request
{
    /**
     * @param array{thingName: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
