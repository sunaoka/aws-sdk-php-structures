<?php

namespace Sunaoka\Aws\Structures\MediaConnect\GrantFlowEntitlements\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int|null $DataTransferSubscriberFeePercent
 * @property string|null $Description
 * @property Encryption|null $Encryption
 * @property 'ENABLED'|'DISABLED'|null $EntitlementStatus
 * @property string|null $Name
 * @property list<string> $Subscribers
 */
class GrantEntitlementRequest extends Shape
{
    /**
     * @param array{
     *     DataTransferSubscriberFeePercent?: int|null,
     *     Description?: string|null,
     *     Encryption?: Encryption|null,
     *     EntitlementStatus?: 'ENABLED'|'DISABLED'|null,
     *     Name?: string|null,
     *     Subscribers: list<string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
