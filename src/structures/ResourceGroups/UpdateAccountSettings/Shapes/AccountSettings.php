<?php

namespace Sunaoka\Aws\Structures\ResourceGroups\UpdateAccountSettings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'ACTIVE'|'INACTIVE' $GroupLifecycleEventsDesiredStatus
 * @property 'ACTIVE'|'INACTIVE'|'IN_PROGRESS'|'ERROR' $GroupLifecycleEventsStatus
 * @property string $GroupLifecycleEventsStatusMessage
 */
class AccountSettings extends Shape
{
    /**
     * @param array{
     *     GroupLifecycleEventsDesiredStatus?: 'ACTIVE'|'INACTIVE',
     *     GroupLifecycleEventsStatus?: 'ACTIVE'|'INACTIVE'|'IN_PROGRESS'|'ERROR',
     *     GroupLifecycleEventsStatusMessage?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
