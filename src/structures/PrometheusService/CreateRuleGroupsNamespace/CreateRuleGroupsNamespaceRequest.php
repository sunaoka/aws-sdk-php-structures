<?php

namespace Sunaoka\Aws\Structures\PrometheusService\CreateRuleGroupsNamespace;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $workspaceId
 * @property string $name
 * @property string|resource|\Psr\Http\Message\StreamInterface $data
 * @property string|null $clientToken
 * @property array<string, string>|null $tags
 */
class CreateRuleGroupsNamespaceRequest extends Request
{
    /**
     * @param array{
     *     workspaceId: string,
     *     name: string,
     *     data: string|resource|\Psr\Http\Message\StreamInterface,
     *     clientToken?: string|null,
     *     tags?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
