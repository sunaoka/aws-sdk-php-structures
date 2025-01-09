<?php

namespace Sunaoka\Aws\Structures\AppSync\DeleteDomainName;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $domainName
 */
class DeleteDomainNameRequest extends Request
{
    /**
     * @param array{domainName: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
