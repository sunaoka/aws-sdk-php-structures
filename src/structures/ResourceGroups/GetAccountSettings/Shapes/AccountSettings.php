<?php

namespace Sunaoka\Aws\Structures\ResourceGroups\GetAccountSettings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'ACTIVE'|'INACTIVE'|null $GroupLifecycleEventsDesiredStatus
 * @property 'ACTIVE'|'INACTIVE'|'IN_PROGRESS'|'ERROR'|null $GroupLifecycleEventsStatus
 * @property string|null $GroupLifecycleEventsStatusMessage
 */
class AccountSettings extends Shape
{
    /**
     * @param array{
     *     GroupLifecycleEventsDesiredStatus?: 'ACTIVE'|'INACTIVE'|null,
     *     GroupLifecycleEventsStatus?: 'ACTIVE'|'INACTIVE'|'IN_PROGRESS'|'ERROR'|null,
     *     GroupLifecycleEventsStatusMessage?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
