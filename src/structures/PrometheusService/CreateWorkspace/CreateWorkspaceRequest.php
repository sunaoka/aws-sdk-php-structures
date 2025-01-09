<?php

namespace Sunaoka\Aws\Structures\PrometheusService\CreateWorkspace;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $alias
 * @property string $clientToken
 * @property string $kmsKeyArn
 * @property array<string, string> $tags
 */
class CreateWorkspaceRequest extends Request
{
    /**
     * @param array{
     *     alias?: string,
     *     clientToken?: string,
     *     kmsKeyArn?: string,
     *     tags?: array<string, string>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
