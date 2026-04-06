<?php

namespace Sunaoka\Aws\Structures\ServiceDiscovery\GetOperation;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $OperationId
 * @property string|null $OwnerAccount
 */
class GetOperationRequest extends Request
{
    /**
     * @param array{
     *     OperationId: string,
     *     OwnerAccount?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
