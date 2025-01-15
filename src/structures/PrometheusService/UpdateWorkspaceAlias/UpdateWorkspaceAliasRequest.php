<?php

namespace Sunaoka\Aws\Structures\PrometheusService\UpdateWorkspaceAlias;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $alias
 * @property string|null $clientToken
 * @property string $workspaceId
 */
class UpdateWorkspaceAliasRequest extends Request
{
    /**
     * @param array{
     *     alias?: string|null,
     *     clientToken?: string|null,
     *     workspaceId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
