<?php

namespace Sunaoka\Aws\Structures\finspace\DeleteEnvironment;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $environmentId
 */
class DeleteEnvironmentRequest extends Request
{
    /**
     * @param array{environmentId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
