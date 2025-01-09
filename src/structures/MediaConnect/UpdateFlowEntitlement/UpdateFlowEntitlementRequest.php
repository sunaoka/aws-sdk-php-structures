<?php

namespace Sunaoka\Aws\Structures\MediaConnect\UpdateFlowEntitlement;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Description
 * @property Shapes\UpdateEncryption $Encryption
 * @property string $EntitlementArn
 * @property 'ENABLED'|'DISABLED' $EntitlementStatus
 * @property string $FlowArn
 * @property list<string> $Subscribers
 */
class UpdateFlowEntitlementRequest extends Request
{
    /**
     * @param array{
     *     Description?: string,
     *     Encryption?: Shapes\UpdateEncryption,
     *     EntitlementArn: string,
     *     EntitlementStatus?: 'ENABLED'|'DISABLED',
     *     FlowArn: string,
     *     Subscribers?: list<string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
