<?php

namespace Sunaoka\Aws\Structures\OpenSearchServerless\UpdateAccountSettings;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\CapacityLimits $capacityLimits
 */
class UpdateAccountSettingsRequest extends Request
{
    /**
     * @param array{capacityLimits?: Shapes\CapacityLimits} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
