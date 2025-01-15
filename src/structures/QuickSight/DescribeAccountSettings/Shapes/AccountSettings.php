<?php

namespace Sunaoka\Aws\Structures\QuickSight\DescribeAccountSettings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $AccountName
 * @property 'STANDARD'|'ENTERPRISE'|'ENTERPRISE_AND_Q'|null $Edition
 * @property string|null $DefaultNamespace
 * @property string|null $NotificationEmail
 * @property bool|null $PublicSharingEnabled
 * @property bool|null $TerminationProtectionEnabled
 */
class AccountSettings extends Shape
{
    /**
     * @param array{
     *     AccountName?: string|null,
     *     Edition?: 'STANDARD'|'ENTERPRISE'|'ENTERPRISE_AND_Q'|null,
     *     DefaultNamespace?: string|null,
     *     NotificationEmail?: string|null,
     *     PublicSharingEnabled?: bool|null,
     *     TerminationProtectionEnabled?: bool|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
