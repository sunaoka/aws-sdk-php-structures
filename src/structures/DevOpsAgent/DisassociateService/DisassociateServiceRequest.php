<?php

namespace Sunaoka\Aws\Structures\DevOpsAgent\DisassociateService;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $agentSpaceId
 * @property string $associationId
 */
class DisassociateServiceRequest extends Request
{
    /**
     * @param array{
     *     agentSpaceId: string,
     *     associationId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
