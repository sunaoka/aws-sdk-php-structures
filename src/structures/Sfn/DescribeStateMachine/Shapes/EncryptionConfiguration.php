<?php

namespace Sunaoka\Aws\Structures\Sfn\DescribeStateMachine\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $kmsKeyId
 * @property int<60, 900>|null $kmsDataKeyReusePeriodSeconds
 * @property 'AWS_OWNED_KEY'|'CUSTOMER_MANAGED_KMS_KEY' $type
 */
class EncryptionConfiguration extends Shape
{
    /**
     * @param array{
     *     kmsKeyId?: string|null,
     *     kmsDataKeyReusePeriodSeconds?: int<60, 900>|null,
     *     type: 'AWS_OWNED_KEY'|'CUSTOMER_MANAGED_KMS_KEY'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
