<?php

namespace Sunaoka\Aws\Structures\Appstream\DisassociateApplicationFromEntitlement;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $StackName
 * @property string $EntitlementName
 * @property string $ApplicationIdentifier
 */
class DisassociateApplicationFromEntitlementRequest extends Request
{
    /**
     * @param array{
     *     StackName: string,
     *     EntitlementName: string,
     *     ApplicationIdentifier: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
