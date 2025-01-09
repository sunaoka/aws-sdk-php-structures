<?php

namespace Sunaoka\Aws\Structures\RolesAnywhere\GetCrl;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $crlId
 */
class GetCrlRequest extends Request
{
    /**
     * @param array{crlId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
