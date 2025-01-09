<?php

namespace Sunaoka\Aws\Structures\MWAA\CreateCliToken;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Name
 */
class CreateCliTokenRequest extends Request
{
    /**
     * @param array{Name: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
