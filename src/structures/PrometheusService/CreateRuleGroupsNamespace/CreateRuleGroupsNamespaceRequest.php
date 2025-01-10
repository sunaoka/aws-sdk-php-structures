<?php

namespace Sunaoka\Aws\Structures\PrometheusService\CreateRuleGroupsNamespace;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $clientToken
 * @property string|resource|\Psr\Http\Message\StreamInterface $data
 * @property string $name
 * @property array<string, string> $tags
 * @property string $workspaceId
 */
class CreateRuleGroupsNamespaceRequest extends Request
{
    /**
     * @param array{
     *     clientToken?: string,
     *     data: string|resource|\Psr\Http\Message\StreamInterface,
     *     name: string,
     *     tags?: array<string, string>,
     *     workspaceId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
