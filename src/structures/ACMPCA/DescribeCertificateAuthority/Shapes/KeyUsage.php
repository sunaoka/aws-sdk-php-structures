<?php

namespace Sunaoka\Aws\Structures\ACMPCA\DescribeCertificateAuthority\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool|null $DigitalSignature
 * @property bool|null $NonRepudiation
 * @property bool|null $KeyEncipherment
 * @property bool|null $DataEncipherment
 * @property bool|null $KeyAgreement
 * @property bool|null $KeyCertSign
 * @property bool|null $CRLSign
 * @property bool|null $EncipherOnly
 * @property bool|null $DecipherOnly
 */
class KeyUsage extends Shape
{
    /**
     * @param array{
     *     DigitalSignature?: bool|null,
     *     NonRepudiation?: bool|null,
     *     KeyEncipherment?: bool|null,
     *     DataEncipherment?: bool|null,
     *     KeyAgreement?: bool|null,
     *     KeyCertSign?: bool|null,
     *     CRLSign?: bool|null,
     *     EncipherOnly?: bool|null,
     *     DecipherOnly?: bool|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
