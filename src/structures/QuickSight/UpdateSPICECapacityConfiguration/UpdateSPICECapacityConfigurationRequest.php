<?php

namespace Sunaoka\Aws\Structures\QuickSight\UpdateSPICECapacityConfiguration;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AwsAccountId
 * @property 'MANUAL'|'AUTO_PURCHASE' $PurchaseMode
 */
class UpdateSPICECapacityConfigurationRequest extends Request
{
    /**
     * @param array{
     *     AwsAccountId: string,
     *     PurchaseMode: 'MANUAL'|'AUTO_PURCHASE'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
