<?php

namespace Sunaoka\Aws\Structures\Ec2\PurchaseScheduledInstances;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ClientToken
 * @property bool $DryRun
 * @property list<Shapes\PurchaseRequest> $PurchaseRequests
 */
class PurchaseScheduledInstancesRequest extends Request
{
    /**
     * @param array{
     *     ClientToken?: string,
     *     DryRun?: bool,
     *     PurchaseRequests: list<Shapes\PurchaseRequest>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
