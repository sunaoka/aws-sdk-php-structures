<?php

namespace Sunaoka\Aws\Structures\ConnectCases\GetDomain;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $domainId
 */
class GetDomainRequest extends Request
{
    /**
     * @param array{domainId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
