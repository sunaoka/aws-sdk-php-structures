<?php

namespace Sunaoka\Aws\Structures\finspace\GetKxEnvironment;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $environmentId
 */
class GetKxEnvironmentRequest extends Request
{
    /**
     * @param array{environmentId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
