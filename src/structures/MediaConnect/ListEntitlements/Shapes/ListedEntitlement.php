<?php

namespace Sunaoka\Aws\Structures\MediaConnect\ListEntitlements\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int|null $DataTransferSubscriberFeePercent
 * @property string $EntitlementArn
 * @property string $EntitlementName
 */
class ListedEntitlement extends Shape
{
    /**
     * @param array{
     *     DataTransferSubscriberFeePercent?: int|null,
     *     EntitlementArn: string,
     *     EntitlementName: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
