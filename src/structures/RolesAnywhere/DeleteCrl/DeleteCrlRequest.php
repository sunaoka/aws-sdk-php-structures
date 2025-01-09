<?php

namespace Sunaoka\Aws\Structures\RolesAnywhere\DeleteCrl;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $crlId
 */
class DeleteCrlRequest extends Request
{
    /**
     * @param array{crlId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
