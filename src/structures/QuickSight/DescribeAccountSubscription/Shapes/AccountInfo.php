<?php

namespace Sunaoka\Aws\Structures\QuickSight\DescribeAccountSubscription\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $AccountName
 * @property 'STANDARD'|'ENTERPRISE'|'ENTERPRISE_AND_Q'|null $Edition
 * @property string|null $NotificationEmail
 * @property string|null $AuthenticationType
 * @property string|null $AccountSubscriptionStatus
 * @property string|null $IAMIdentityCenterInstanceArn
 */
class AccountInfo extends Shape
{
    /**
     * @param array{
     *     AccountName?: string|null,
     *     Edition?: 'STANDARD'|'ENTERPRISE'|'ENTERPRISE_AND_Q'|null,
     *     NotificationEmail?: string|null,
     *     AuthenticationType?: string|null,
     *     AccountSubscriptionStatus?: string|null,
     *     IAMIdentityCenterInstanceArn?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
