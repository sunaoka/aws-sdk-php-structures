<?php

namespace Sunaoka\Aws\Structures\PrometheusService\DeleteRuleGroupsNamespace;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $workspaceId
 * @property string $name
 * @property string|null $clientToken
 */
class DeleteRuleGroupsNamespaceRequest extends Request
{
    /**
     * @param array{
     *     workspaceId: string,
     *     name: string,
     *     clientToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
