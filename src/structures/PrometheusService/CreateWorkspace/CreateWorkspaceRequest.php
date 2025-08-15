<?php

namespace Sunaoka\Aws\Structures\PrometheusService\CreateWorkspace;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $alias
 * @property string|null $clientToken
 * @property array<string, string>|null $tags
 * @property string|null $kmsKeyArn
 */
class CreateWorkspaceRequest extends Request
{
    /**
     * @param array{
     *     alias?: string|null,
     *     clientToken?: string|null,
     *     tags?: array<string, string>|null,
     *     kmsKeyArn?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
