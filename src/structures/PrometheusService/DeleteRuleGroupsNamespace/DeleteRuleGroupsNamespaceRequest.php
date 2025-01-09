<?php

namespace Sunaoka\Aws\Structures\PrometheusService\DeleteRuleGroupsNamespace;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $clientToken
 * @property string $name
 * @property string $workspaceId
 */
class DeleteRuleGroupsNamespaceRequest extends Request
{
    /**
     * @param array{
     *     clientToken?: string,
     *     name: string,
     *     workspaceId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
