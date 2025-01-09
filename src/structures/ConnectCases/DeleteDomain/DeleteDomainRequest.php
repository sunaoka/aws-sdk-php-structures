<?php

namespace Sunaoka\Aws\Structures\ConnectCases\DeleteDomain;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $domainId
 */
class DeleteDomainRequest extends Request
{
    /**
     * @param array{domainId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
