<?php

namespace Sunaoka\Aws\Structures\MediaConnect\CreateFlow\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $DataTransferSubscriberFeePercent
 * @property string $Description
 * @property Encryption $Encryption
 * @property 'ENABLED'|'DISABLED' $EntitlementStatus
 * @property string $Name
 * @property list<string> $Subscribers
 */
class GrantEntitlementRequest extends Shape
{
    /**
     * @param array{
     *     DataTransferSubscriberFeePercent?: int,
     *     Description?: string,
     *     Encryption?: Encryption,
     *     EntitlementStatus?: 'ENABLED'|'DISABLED',
     *     Name?: string,
     *     Subscribers: list<string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
