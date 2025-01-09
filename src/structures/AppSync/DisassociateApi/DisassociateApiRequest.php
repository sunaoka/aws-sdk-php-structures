<?php

namespace Sunaoka\Aws\Structures\AppSync\DisassociateApi;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $domainName
 */
class DisassociateApiRequest extends Request
{
    /**
     * @param array{domainName: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
