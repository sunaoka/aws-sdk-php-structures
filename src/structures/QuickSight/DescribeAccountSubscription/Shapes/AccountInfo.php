<?php

namespace Sunaoka\Aws\Structures\QuickSight\DescribeAccountSubscription\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $AccountName
 * @property 'STANDARD'|'ENTERPRISE'|'ENTERPRISE_AND_Q' $Edition
 * @property string $NotificationEmail
 * @property string $AuthenticationType
 * @property string $AccountSubscriptionStatus
 * @property string $IAMIdentityCenterInstanceArn
 */
class AccountInfo extends Shape
{
    /**
     * @param array{
     *     AccountName?: string,
     *     Edition?: 'STANDARD'|'ENTERPRISE'|'ENTERPRISE_AND_Q',
     *     NotificationEmail?: string,
     *     AuthenticationType?: string,
     *     AccountSubscriptionStatus?: string,
     *     IAMIdentityCenterInstanceArn?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
