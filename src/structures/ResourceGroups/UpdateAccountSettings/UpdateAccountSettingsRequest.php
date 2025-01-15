<?php

namespace Sunaoka\Aws\Structures\ResourceGroups\UpdateAccountSettings;

use Sunaoka\Aws\Structures\Request;

/**
 * @property 'ACTIVE'|'INACTIVE'|null $GroupLifecycleEventsDesiredStatus
 */
class UpdateAccountSettingsRequest extends Request
{
    /**
     * @param array{GroupLifecycleEventsDesiredStatus?: 'ACTIVE'|'INACTIVE'|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
