<?php

namespace Sunaoka\Aws\Structures\PrometheusService\UpdateWorkspaceAlias;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $workspaceId
 * @property string|null $alias
 * @property string|null $clientToken
 */
class UpdateWorkspaceAliasRequest extends Request
{
    /**
     * @param array{
     *     workspaceId: string,
     *     alias?: string|null,
     *     clientToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
