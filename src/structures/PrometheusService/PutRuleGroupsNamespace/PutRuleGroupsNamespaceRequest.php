<?php

namespace Sunaoka\Aws\Structures\PrometheusService\PutRuleGroupsNamespace;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $clientToken
 * @property string|resource|\Psr\Http\Message\StreamInterface $data
 * @property string $name
 * @property string $workspaceId
 */
class PutRuleGroupsNamespaceRequest extends Request
{
    /**
     * @param array{
     *     clientToken?: string,
     *     data: string|resource|\Psr\Http\Message\StreamInterface,
     *     name: string,
     *     workspaceId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
