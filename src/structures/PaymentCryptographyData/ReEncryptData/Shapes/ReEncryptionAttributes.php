<?php

namespace Sunaoka\Aws\Structures\PaymentCryptographyData\ReEncryptData\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property DukptEncryptionAttributes|null $Dukpt
 * @property SymmetricEncryptionAttributes|null $Symmetric
 */
class ReEncryptionAttributes extends Shape
{
    /**
     * @param array{
     *     Dukpt?: DukptEncryptionAttributes|null,
     *     Symmetric?: SymmetricEncryptionAttributes|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
