<?php

namespace Sunaoka\Aws\Structures\Proton\DeleteEnvironment;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $name
 */
class DeleteEnvironmentRequest extends Request
{
    /**
     * @param array{name: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
