<?php

namespace Sunaoka\Aws\Structures\DevOpsAgent\UpdateOperatorAppIdpConfig;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $agentSpaceId
 * @property string|null $idpClientSecret
 */
class UpdateOperatorAppIdpConfigRequest extends Request
{
    /**
     * @param array{
     *     agentSpaceId: string,
     *     idpClientSecret?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
