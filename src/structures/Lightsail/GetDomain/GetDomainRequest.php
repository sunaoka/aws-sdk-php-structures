<?php

namespace Sunaoka\Aws\Structures\Lightsail\GetDomain;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $domainName
 */
class GetDomainRequest extends Request
{
    /**
     * @param array{domainName: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
