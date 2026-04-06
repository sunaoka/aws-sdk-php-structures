<?php

namespace Sunaoka\Aws\Structures\PaymentCryptography\ExportKey;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ExportKeyIdentifier
 * @property Shapes\ExportKeyMaterial $KeyMaterial
 */
class ExportKeyRequest extends Request
{
    /**
     * @param array{
     *     ExportKeyIdentifier: string,
     *     KeyMaterial: Shapes\ExportKeyMaterial
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
