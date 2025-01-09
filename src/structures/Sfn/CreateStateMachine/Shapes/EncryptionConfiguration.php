<?php

namespace Sunaoka\Aws\Structures\Sfn\CreateStateMachine\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $kmsKeyId
 * @property int<60, 900> $kmsDataKeyReusePeriodSeconds
 * @property 'AWS_OWNED_KEY'|'CUSTOMER_MANAGED_KMS_KEY' $type
 */
class EncryptionConfiguration extends Shape
{
    /**
     * @param array{
     *     kmsKeyId?: string,
     *     kmsDataKeyReusePeriodSeconds?: int<60, 900>,
     *     type: 'AWS_OWNED_KEY'|'CUSTOMER_MANAGED_KMS_KEY'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
