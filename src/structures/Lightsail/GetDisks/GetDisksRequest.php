<?php

namespace Sunaoka\Aws\Structures\Lightsail\GetDisks;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $pageToken
 */
class GetDisksRequest extends Request
{
    /**
     * @param array{pageToken?: string} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
