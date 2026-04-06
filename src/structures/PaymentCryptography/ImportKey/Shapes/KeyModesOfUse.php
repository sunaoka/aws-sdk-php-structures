<?php

namespace Sunaoka\Aws\Structures\PaymentCryptography\ImportKey\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool|null $Encrypt
 * @property bool|null $Decrypt
 * @property bool|null $Wrap
 * @property bool|null $Unwrap
 * @property bool|null $Generate
 * @property bool|null $Sign
 * @property bool|null $Verify
 * @property bool|null $DeriveKey
 * @property bool|null $NoRestrictions
 */
class KeyModesOfUse extends Shape
{
    /**
     * @param array{
     *     Encrypt?: bool|null,
     *     Decrypt?: bool|null,
     *     Wrap?: bool|null,
     *     Unwrap?: bool|null,
     *     Generate?: bool|null,
     *     Sign?: bool|null,
     *     Verify?: bool|null,
     *     DeriveKey?: bool|null,
     *     NoRestrictions?: bool|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
