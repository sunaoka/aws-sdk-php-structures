<?php

namespace Sunaoka\Aws\Structures\MWAA\CreateWebLoginToken;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Name
 */
class CreateWebLoginTokenRequest extends Request
{
    /**
     * @param array{Name: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
