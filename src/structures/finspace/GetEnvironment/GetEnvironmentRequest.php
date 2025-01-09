<?php

namespace Sunaoka\Aws\Structures\finspace\GetEnvironment;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $environmentId
 */
class GetEnvironmentRequest extends Request
{
    /**
     * @param array{environmentId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
