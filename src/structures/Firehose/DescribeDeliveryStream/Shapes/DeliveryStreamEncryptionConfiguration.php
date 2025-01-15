<?php

namespace Sunaoka\Aws\Structures\Firehose\DescribeDeliveryStream\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $KeyARN
 * @property 'AWS_OWNED_CMK'|'CUSTOMER_MANAGED_CMK'|null $KeyType
 * @property 'ENABLED'|'ENABLING'|'ENABLING_FAILED'|'DISABLED'|'DISABLING'|'DISABLING_FAILED'|null $Status
 * @property FailureDescription|null $FailureDescription
 */
class DeliveryStreamEncryptionConfiguration extends Shape
{
    /**
     * @param array{
     *     KeyARN?: string|null,
     *     KeyType?: 'AWS_OWNED_CMK'|'CUSTOMER_MANAGED_CMK'|null,
     *     Status?: 'ENABLED'|'ENABLING'|'ENABLING_FAILED'|'DISABLED'|'DISABLING'|'DISABLING_FAILED'|null,
     *     FailureDescription?: FailureDescription|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
