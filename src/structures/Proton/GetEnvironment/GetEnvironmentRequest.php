<?php

namespace Sunaoka\Aws\Structures\Proton\GetEnvironment;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $name
 */
class GetEnvironmentRequest extends Request
{
    /**
     * @param array{name: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
