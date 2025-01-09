<?php

namespace Sunaoka\Aws\Structures\CustomerProfiles\DeleteDomain;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DomainName
 */
class DeleteDomainRequest extends Request
{
    /**
     * @param array{DomainName: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
