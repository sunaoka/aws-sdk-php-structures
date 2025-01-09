<?php

namespace Sunaoka\Aws\Structures\PaymentCryptography\ExportKey;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\ExportKeyMaterial $KeyMaterial
 * @property string $ExportKeyIdentifier
 * @property Shapes\ExportAttributes $ExportAttributes
 */
class ExportKeyRequest extends Request
{
    /**
     * @param array{
     *     KeyMaterial: Shapes\ExportKeyMaterial,
     *     ExportKeyIdentifier: string,
     *     ExportAttributes?: Shapes\ExportAttributes
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
