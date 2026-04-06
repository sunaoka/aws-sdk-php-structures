<?php

namespace Sunaoka\Aws\Structures\Batch\DeleteServiceEnvironment;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $serviceEnvironment
 */
class DeleteServiceEnvironmentRequest extends Request
{
    /**
     * @param array{serviceEnvironment: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
