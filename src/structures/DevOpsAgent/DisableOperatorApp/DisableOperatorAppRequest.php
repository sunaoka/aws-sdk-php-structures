<?php

namespace Sunaoka\Aws\Structures\DevOpsAgent\DisableOperatorApp;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $agentSpaceId
 * @property 'iam'|'idc'|'idp'|null $authFlow
 */
class DisableOperatorAppRequest extends Request
{
    /**
     * @param array{
     *     agentSpaceId: string,
     *     authFlow?: 'iam'|'idc'|'idp'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
