<?php

namespace Sunaoka\Aws\Structures\QuickSight\DescribeKeyRegistration;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $AwsAccountId
 * @property list<Shapes\RegisteredCustomerManagedKey> $KeyRegistration
 * @property string $RequestId
 * @property int $Status
 */
class DescribeKeyRegistrationResponse extends Response
{
}
