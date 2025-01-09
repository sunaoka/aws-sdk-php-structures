<?php

namespace Sunaoka\Aws\Structures\CustomerProfiles\GetDomain;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DomainName
 */
class GetDomainRequest extends Request
{
    /**
     * @param array{DomainName: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
