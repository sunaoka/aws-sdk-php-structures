<?php

namespace Sunaoka\Aws\Structures\CodeBuild\StartSandboxConnection;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $sandboxId
 */
class StartSandboxConnectionRequest extends Request
{
    /**
     * @param array{sandboxId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
