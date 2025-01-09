<?php

namespace Sunaoka\Aws\Structures\Firehose\StartDeliveryStreamEncryption\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $KeyARN
 * @property 'AWS_OWNED_CMK'|'CUSTOMER_MANAGED_CMK' $KeyType
 */
class DeliveryStreamEncryptionConfigurationInput extends Shape
{
    /**
     * @param array{
     *     KeyARN?: string,
     *     KeyType: 'AWS_OWNED_CMK'|'CUSTOMER_MANAGED_CMK'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
