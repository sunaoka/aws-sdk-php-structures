<?php

namespace Sunaoka\Aws\Structures\Lightsail\GetSubdomains;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $subdomainName
 * @property string|null $pageToken
 */
class GetSubdomainsRequest extends Request
{
    /**
     * @param array{
     *     subdomainName?: string|null,
     *     pageToken?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
