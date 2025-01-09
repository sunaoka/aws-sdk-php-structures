<?php

namespace Sunaoka\Aws\Structures\MWAA\DeleteEnvironment;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Name
 */
class DeleteEnvironmentRequest extends Request
{
    /**
     * @param array{Name: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
