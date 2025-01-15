<?php

namespace Sunaoka\Aws\Structures\QuickSight\UpdateAccountSettings;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AwsAccountId
 * @property string $DefaultNamespace
 * @property string|null $NotificationEmail
 * @property bool|null $TerminationProtectionEnabled
 */
class UpdateAccountSettingsRequest extends Request
{
    /**
     * @param array{
     *     AwsAccountId: string,
     *     DefaultNamespace: string,
     *     NotificationEmail?: string|null,
     *     TerminationProtectionEnabled?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
