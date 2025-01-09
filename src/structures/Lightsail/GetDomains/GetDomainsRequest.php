<?php

namespace Sunaoka\Aws\Structures\Lightsail\GetDomains;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $pageToken
 */
class GetDomainsRequest extends Request
{
    /**
     * @param array{pageToken?: string} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
