<?php

namespace Sunaoka\Aws\Structures\Lightsail\DeleteSubdomain;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $subdomainName
 */
class DeleteSubdomainRequest extends Request
{
    /**
     * @param array{subdomainName: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
