<?php

namespace Sunaoka\Aws\Structures\PrometheusService\DeleteResourcePolicy;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $workspaceId
 * @property string|null $clientToken
 * @property string|null $revisionId
 */
class DeleteResourcePolicyRequest extends Request
{
    /**
     * @param array{
     *     workspaceId: string,
     *     clientToken?: string|null,
     *     revisionId?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
