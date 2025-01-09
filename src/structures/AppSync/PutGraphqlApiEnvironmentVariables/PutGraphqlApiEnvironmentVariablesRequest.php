<?php

namespace Sunaoka\Aws\Structures\AppSync\PutGraphqlApiEnvironmentVariables;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $apiId
 * @property array<string, string> $environmentVariables
 */
class PutGraphqlApiEnvironmentVariablesRequest extends Request
{
    /**
     * @param array{
     *     apiId: string,
     *     environmentVariables: array<string, string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
