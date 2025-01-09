<?php

namespace Sunaoka\Aws\Structures\Lightsail\GetActiveNames;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $pageToken
 */
class GetActiveNamesRequest extends Request
{
    /**
     * @param array{pageToken?: string} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
