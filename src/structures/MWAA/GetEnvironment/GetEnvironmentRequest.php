<?php

namespace Sunaoka\Aws\Structures\MWAA\GetEnvironment;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Name
 */
class GetEnvironmentRequest extends Request
{
    /**
     * @param array{Name: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
