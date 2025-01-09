<?php

namespace Sunaoka\Aws\Structures\RolesAnywhere\DisableCrl;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $crlId
 */
class DisableCrlRequest extends Request
{
    /**
     * @param array{crlId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
