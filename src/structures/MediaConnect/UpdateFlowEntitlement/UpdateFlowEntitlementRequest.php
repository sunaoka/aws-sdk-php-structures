<?php

namespace Sunaoka\Aws\Structures\MediaConnect\UpdateFlowEntitlement;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $Description
 * @property Shapes\UpdateEncryption|null $Encryption
 * @property string $EntitlementArn
 * @property 'ENABLED'|'DISABLED'|null $EntitlementStatus
 * @property string $FlowArn
 * @property list<string>|null $Subscribers
 */
class UpdateFlowEntitlementRequest extends Request
{
    /**
     * @param array{
     *     Description?: string|null,
     *     Encryption?: Shapes\UpdateEncryption|null,
     *     EntitlementArn: string,
     *     EntitlementStatus?: 'ENABLED'|'DISABLED'|null,
     *     FlowArn: string,
     *     Subscribers?: list<string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
