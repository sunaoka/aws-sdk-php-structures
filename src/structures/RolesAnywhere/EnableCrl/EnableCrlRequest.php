<?php

namespace Sunaoka\Aws\Structures\RolesAnywhere\EnableCrl;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $crlId
 */
class EnableCrlRequest extends Request
{
    /**
     * @param array{crlId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
