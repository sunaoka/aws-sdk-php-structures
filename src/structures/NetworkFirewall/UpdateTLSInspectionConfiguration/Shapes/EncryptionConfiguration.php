<?php

namespace Sunaoka\Aws\Structures\NetworkFirewall\UpdateTLSInspectionConfiguration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $KeyId
 * @property 'CUSTOMER_KMS'|'AWS_OWNED_KMS_KEY' $Type
 */
class EncryptionConfiguration extends Shape
{
    /**
     * @param array{
     *     KeyId?: string|null,
     *     Type: 'CUSTOMER_KMS'|'AWS_OWNED_KMS_KEY'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
