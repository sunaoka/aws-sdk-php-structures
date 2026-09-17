<?php

namespace Sunaoka\Aws\Structures\Notifications\AssociateManagedNotificationAccountContact;

use Sunaoka\Aws\Structures\Request;

/**
 * @property 'ACCOUNT_PRIMARY'|'ACCOUNT_ALTERNATE_BILLING'|'ACCOUNT_ALTERNATE_OPERATIONS'|'ACCOUNT_ALTERNATE_SECURITY' $contactIdentifier
 * @property string $managedNotificationConfigurationArn
 * @property bool|null $isSensitiveEventsSubscribed
 */
class AssociateManagedNotificationAccountContactRequest extends Request
{
    /**
     * @param array{
     *     contactIdentifier: 'ACCOUNT_PRIMARY'|'ACCOUNT_ALTERNATE_BILLING'|'ACCOUNT_ALTERNATE_OPERATIONS'|'ACCOUNT_ALTERNATE_SECURITY',
     *     managedNotificationConfigurationArn: string,
     *     isSensitiveEventsSubscribed?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
