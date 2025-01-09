<?php

namespace Sunaoka\Aws\Structures\QuickSight\UpdateAccountSettings;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AwsAccountId
 * @property string $DefaultNamespace
 * @property string $NotificationEmail
 * @property bool $TerminationProtectionEnabled
 */
class UpdateAccountSettingsRequest extends Request
{
    /**
     * @param array{
     *     AwsAccountId: string,
     *     DefaultNamespace: string,
     *     NotificationEmail?: string,
     *     TerminationProtectionEnabled?: bool
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
