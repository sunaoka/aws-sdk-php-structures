<?php

namespace Sunaoka\Aws\Structures\CodeCatalyst\DeleteAccessToken;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $id
 */
class DeleteAccessTokenRequest extends Request
{
    /**
     * @param array{id: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
