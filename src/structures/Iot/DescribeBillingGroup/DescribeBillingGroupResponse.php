<?php

namespace Sunaoka\Aws\Structures\Iot\DescribeBillingGroup;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $billingGroupName
 * @property string $billingGroupId
 * @property string $billingGroupArn
 * @property int $version
 * @property Shapes\BillingGroupProperties $billingGroupProperties
 * @property Shapes\BillingGroupMetadata $billingGroupMetadata
 */
class DescribeBillingGroupResponse extends Response
{
}
