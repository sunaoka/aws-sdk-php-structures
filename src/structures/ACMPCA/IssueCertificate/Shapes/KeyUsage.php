<?php

namespace Sunaoka\Aws\Structures\ACMPCA\IssueCertificate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool $DigitalSignature
 * @property bool $NonRepudiation
 * @property bool $KeyEncipherment
 * @property bool $DataEncipherment
 * @property bool $KeyAgreement
 * @property bool $KeyCertSign
 * @property bool $CRLSign
 * @property bool $EncipherOnly
 * @property bool $DecipherOnly
 */
class KeyUsage extends Shape
{
    /**
     * @param array{
     *     DigitalSignature?: bool,
     *     NonRepudiation?: bool,
     *     KeyEncipherment?: bool,
     *     DataEncipherment?: bool,
     *     KeyAgreement?: bool,
     *     KeyCertSign?: bool,
     *     CRLSign?: bool,
     *     EncipherOnly?: bool,
     *     DecipherOnly?: bool
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
