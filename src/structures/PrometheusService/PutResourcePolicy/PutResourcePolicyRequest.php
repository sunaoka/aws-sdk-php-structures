<?php

namespace Sunaoka\Aws\Structures\PrometheusService\PutResourcePolicy;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $workspaceId
 * @property string $policyDocument
 * @property string|null $clientToken
 * @property string|null $revisionId
 */
class PutResourcePolicyRequest extends Request
{
    /**
     * @param array{
     *     workspaceId: string,
     *     policyDocument: string,
     *     clientToken?: string|null,
     *     revisionId?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
