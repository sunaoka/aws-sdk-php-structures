<?php

namespace Sunaoka\Aws\Structures\CodeGuruReviewer\DisassociateRepository\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $KMSKeyId
 * @property 'AWS_OWNED_CMK'|'CUSTOMER_MANAGED_CMK'|null $EncryptionOption
 */
class KMSKeyDetails extends Shape
{
    /**
     * @param array{
     *     KMSKeyId?: string|null,
     *     EncryptionOption?: 'AWS_OWNED_CMK'|'CUSTOMER_MANAGED_CMK'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
