<?php

namespace Sunaoka\Aws\Structures\Notifications\DisassociateManagedNotificationAccountContact;

use Sunaoka\Aws\Structures\Request;

/**
 * @property 'ACCOUNT_PRIMARY'|'ACCOUNT_ALTERNATE_BILLING'|'ACCOUNT_ALTERNATE_OPERATIONS'|'ACCOUNT_ALTERNATE_SECURITY' $contactIdentifier
 * @property string $managedNotificationConfigurationArn
 */
class DisassociateManagedNotificationAccountContactRequest extends Request
{
    /**
     * @param array{
     *     contactIdentifier: 'ACCOUNT_PRIMARY'|'ACCOUNT_ALTERNATE_BILLING'|'ACCOUNT_ALTERNATE_OPERATIONS'|'ACCOUNT_ALTERNATE_SECURITY',
     *     managedNotificationConfigurationArn: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
