<?php

namespace Sunaoka\Aws\Structures\Invoicing\CreateProcurementPortalPreference\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $ApprovalRequestRedirectUrl
 */
class MarketplacePunchOutPreference extends Shape
{
    /**
     * @param array{ApprovalRequestRedirectUrl?: string|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
