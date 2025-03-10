<?php

namespace Sunaoka\Aws\Structures\WorkSpacesThinClient\GetEnvironment;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $id
 */
class GetEnvironmentRequest extends Request
{
    /**
     * @param array{id: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
