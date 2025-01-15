<?php

namespace Sunaoka\Aws\Structures\Iot\DescribeBillingGroup;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $billingGroupName
 * @property string|null $billingGroupId
 * @property string|null $billingGroupArn
 * @property int|null $version
 * @property Shapes\BillingGroupProperties|null $billingGroupProperties
 * @property Shapes\BillingGroupMetadata|null $billingGroupMetadata
 */
class DescribeBillingGroupResponse extends Response
{
}
