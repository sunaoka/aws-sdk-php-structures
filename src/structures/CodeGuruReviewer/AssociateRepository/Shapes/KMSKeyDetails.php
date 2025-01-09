<?php

namespace Sunaoka\Aws\Structures\CodeGuruReviewer\AssociateRepository\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $KMSKeyId
 * @property 'AWS_OWNED_CMK'|'CUSTOMER_MANAGED_CMK' $EncryptionOption
 */
class KMSKeyDetails extends Shape
{
    /**
     * @param array{
     *     KMSKeyId?: string,
     *     EncryptionOption?: 'AWS_OWNED_CMK'|'CUSTOMER_MANAGED_CMK'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
