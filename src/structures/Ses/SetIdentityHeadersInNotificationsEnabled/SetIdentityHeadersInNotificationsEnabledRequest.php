<?php

namespace Sunaoka\Aws\Structures\Ses\SetIdentityHeadersInNotificationsEnabled;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Identity
 * @property 'Bounce'|'Complaint'|'Delivery' $NotificationType
 * @property bool $Enabled
 */
class SetIdentityHeadersInNotificationsEnabledRequest extends Request
{
    /**
     * @param array{
     *     Identity: string,
     *     NotificationType: 'Bounce'|'Complaint'|'Delivery',
     *     Enabled: bool
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
