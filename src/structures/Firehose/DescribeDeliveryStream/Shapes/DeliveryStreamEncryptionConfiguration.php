<?php

namespace Sunaoka\Aws\Structures\Firehose\DescribeDeliveryStream\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $KeyARN
 * @property 'AWS_OWNED_CMK'|'CUSTOMER_MANAGED_CMK' $KeyType
 * @property 'ENABLED'|'ENABLING'|'ENABLING_FAILED'|'DISABLED'|'DISABLING'|'DISABLING_FAILED' $Status
 * @property FailureDescription $FailureDescription
 */
class DeliveryStreamEncryptionConfiguration extends Shape
{
    /**
     * @param array{
     *     KeyARN?: string,
     *     KeyType?: 'AWS_OWNED_CMK'|'CUSTOMER_MANAGED_CMK',
     *     Status?: 'ENABLED'|'ENABLING'|'ENABLING_FAILED'|'DISABLED'|'DISABLING'|'DISABLING_FAILED',
     *     FailureDescription?: FailureDescription
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
