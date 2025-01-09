<?php

namespace Sunaoka\Aws\Structures\PaymentCryptographyData\ReEncryptData\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property SymmetricEncryptionAttributes $Symmetric
 * @property DukptEncryptionAttributes $Dukpt
 */
class ReEncryptionAttributes extends Shape
{
    /**
     * @param array{
     *     Symmetric?: SymmetricEncryptionAttributes,
     *     Dukpt?: DukptEncryptionAttributes
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
