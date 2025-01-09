<?php

namespace Sunaoka\Aws\Structures\Ses\DeleteIdentity;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Identity
 */
class DeleteIdentityRequest extends Request
{
    /**
     * @param array{Identity: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
