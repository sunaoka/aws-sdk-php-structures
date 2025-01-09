<?php

namespace Sunaoka\Aws\Structures\MediaConnect\UpdateFlow\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $DataTransferSubscriberFeePercent
 * @property string $Description
 * @property Encryption $Encryption
 * @property string $EntitlementArn
 * @property 'ENABLED'|'DISABLED' $EntitlementStatus
 * @property string $Name
 * @property list<string> $Subscribers
 */
class Entitlement extends Shape
{
    /**
     * @param array{
     *     DataTransferSubscriberFeePercent?: int,
     *     Description?: string,
     *     Encryption?: Encryption,
     *     EntitlementArn: string,
     *     EntitlementStatus?: 'ENABLED'|'DISABLED',
     *     Name: string,
     *     Subscribers: list<string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
