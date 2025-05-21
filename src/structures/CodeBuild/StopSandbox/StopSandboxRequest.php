<?php

namespace Sunaoka\Aws\Structures\CodeBuild\StopSandbox;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $id
 */
class StopSandboxRequest extends Request
{
    /**
     * @param array{id: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
