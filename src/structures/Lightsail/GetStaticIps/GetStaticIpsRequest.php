<?php

namespace Sunaoka\Aws\Structures\Lightsail\GetStaticIps;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $pageToken
 */
class GetStaticIpsRequest extends Request
{
    /**
     * @param array{pageToken?: string} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
