<?php

namespace Sunaoka\Aws\Structures\PrometheusService\UpdateWorkspaceAlias;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $alias
 * @property string $clientToken
 * @property string $workspaceId
 */
class UpdateWorkspaceAliasRequest extends Request
{
    /**
     * @param array{
     *     alias?: string,
     *     clientToken?: string,
     *     workspaceId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
