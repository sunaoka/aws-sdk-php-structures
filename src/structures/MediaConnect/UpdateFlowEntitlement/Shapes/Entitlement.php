<?php

namespace Sunaoka\Aws\Structures\MediaConnect\UpdateFlowEntitlement\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int|null $DataTransferSubscriberFeePercent
 * @property string|null $Description
 * @property Encryption|null $Encryption
 * @property string $EntitlementArn
 * @property 'ENABLED'|'DISABLED'|null $EntitlementStatus
 * @property string $Name
 * @property list<string> $Subscribers
 */
class Entitlement extends Shape
{
    /**
     * @param array{
     *     DataTransferSubscriberFeePercent?: int|null,
     *     Description?: string|null,
     *     Encryption?: Encryption|null,
     *     EntitlementArn: string,
     *     EntitlementStatus?: 'ENABLED'|'DISABLED'|null,
     *     Name: string,
     *     Subscribers: list<string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
