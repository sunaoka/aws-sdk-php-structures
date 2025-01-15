<?php

namespace Sunaoka\Aws\Structures\Ec2\PurchaseScheduledInstances;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $ClientToken
 * @property bool|null $DryRun
 * @property list<Shapes\PurchaseRequest> $PurchaseRequests
 */
class PurchaseScheduledInstancesRequest extends Request
{
    /**
     * @param array{
     *     ClientToken?: string|null,
     *     DryRun?: bool|null,
     *     PurchaseRequests: list<Shapes\PurchaseRequest>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
