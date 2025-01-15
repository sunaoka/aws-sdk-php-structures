<?php

namespace Sunaoka\Aws\Structures\PaymentCryptographyData\ReEncryptData\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property SymmetricEncryptionAttributes|null $Symmetric
 * @property DukptEncryptionAttributes|null $Dukpt
 */
class ReEncryptionAttributes extends Shape
{
    /**
     * @param array{
     *     Symmetric?: SymmetricEncryptionAttributes|null,
     *     Dukpt?: DukptEncryptionAttributes|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
