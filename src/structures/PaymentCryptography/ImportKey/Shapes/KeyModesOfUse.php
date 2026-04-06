<?php

namespace Sunaoka\Aws\Structures\PaymentCryptography\ImportKey\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool|null $Decrypt
 * @property bool|null $DeriveKey
 * @property bool|null $Encrypt
 * @property bool|null $Generate
 * @property bool|null $NoRestrictions
 * @property bool|null $Sign
 * @property bool|null $Unwrap
 * @property bool|null $Verify
 * @property bool|null $Wrap
 */
class KeyModesOfUse extends Shape
{
    /**
     * @param array{
     *     Decrypt?: bool|null,
     *     DeriveKey?: bool|null,
     *     Encrypt?: bool|null,
     *     Generate?: bool|null,
     *     NoRestrictions?: bool|null,
     *     Sign?: bool|null,
     *     Unwrap?: bool|null,
     *     Verify?: bool|null,
     *     Wrap?: bool|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
