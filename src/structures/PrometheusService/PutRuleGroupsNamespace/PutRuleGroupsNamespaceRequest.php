<?php

namespace Sunaoka\Aws\Structures\PrometheusService\PutRuleGroupsNamespace;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $clientToken
 * @property string $data
 * @property string $name
 * @property string $workspaceId
 */
class PutRuleGroupsNamespaceRequest extends Request
{
    /**
     * @param array{
     *     clientToken?: string,
     *     data: string,
     *     name: string,
     *     workspaceId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
