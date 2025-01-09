<?php

namespace Sunaoka\Aws\Structures\QuickSight\DescribeAccountSettings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $AccountName
 * @property 'STANDARD'|'ENTERPRISE'|'ENTERPRISE_AND_Q' $Edition
 * @property string $DefaultNamespace
 * @property string $NotificationEmail
 * @property bool $PublicSharingEnabled
 * @property bool $TerminationProtectionEnabled
 */
class AccountSettings extends Shape
{
    /**
     * @param array{
     *     AccountName?: string,
     *     Edition?: 'STANDARD'|'ENTERPRISE'|'ENTERPRISE_AND_Q',
     *     DefaultNamespace?: string,
     *     NotificationEmail?: string,
     *     PublicSharingEnabled?: bool,
     *     TerminationProtectionEnabled?: bool
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
