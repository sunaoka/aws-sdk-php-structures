<?php

namespace Sunaoka\Aws\Structures\PaymentCryptography\DeleteKey\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool $Encrypt
 * @property bool $Decrypt
 * @property bool $Wrap
 * @property bool $Unwrap
 * @property bool $Generate
 * @property bool $Sign
 * @property bool $Verify
 * @property bool $DeriveKey
 * @property bool $NoRestrictions
 */
class KeyModesOfUse extends Shape
{
    /**
     * @param array{
     *     Encrypt?: bool,
     *     Decrypt?: bool,
     *     Wrap?: bool,
     *     Unwrap?: bool,
     *     Generate?: bool,
     *     Sign?: bool,
     *     Verify?: bool,
     *     DeriveKey?: bool,
     *     NoRestrictions?: bool
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
