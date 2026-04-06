<?php

namespace Sunaoka\Aws\Structures\QuickSight\DescribeKeyRegistration;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $AwsAccountId
 * @property list<Shapes\RegisteredCustomerManagedKey>|null $KeyRegistration
 * @property Shapes\QDataKey|null $QDataKey
 * @property string|null $RequestId
 * @property int|null $Status
 */
class DescribeKeyRegistrationResponse extends Response
{
}
