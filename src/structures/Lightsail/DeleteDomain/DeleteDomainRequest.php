<?php

namespace Sunaoka\Aws\Structures\Lightsail\DeleteDomain;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $domainName
 */
class DeleteDomainRequest extends Request
{
    /**
     * @param array{domainName: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
