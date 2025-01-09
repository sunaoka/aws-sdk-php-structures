<?php

namespace Sunaoka\Aws\Structures\AppSync\GetDomainName;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $domainName
 */
class GetDomainNameRequest extends Request
{
    /**
     * @param array{domainName: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
