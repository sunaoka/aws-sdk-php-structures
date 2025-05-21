<?php

namespace Sunaoka\Aws\Structures\CodeBuild\StartSandbox;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $projectName
 * @property string|null $idempotencyToken
 */
class StartSandboxRequest extends Request
{
    /**
     * @param array{
     *     projectName?: string|null,
     *     idempotencyToken?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
