<?php

namespace Sunaoka\Aws\Structures\OpenSearchServerless\UpdateAccountSettings;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\CapacityLimits|null $capacityLimits
 */
class UpdateAccountSettingsRequest extends Request
{
    /**
     * @param array{capacityLimits?: Shapes\CapacityLimits|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
