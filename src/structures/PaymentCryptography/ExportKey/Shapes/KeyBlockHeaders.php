<?php

namespace Sunaoka\Aws\Structures\PaymentCryptography\ExportKey\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property KeyModesOfUse|null $KeyModesOfUse
 * @property 'EXPORTABLE'|'NON_EXPORTABLE'|'SENSITIVE'|null $KeyExportability
 * @property string|null $KeyVersion
 * @property array<string, string>|null $OptionalBlocks
 */
class KeyBlockHeaders extends Shape
{
    /**
     * @param array{
     *     KeyModesOfUse?: KeyModesOfUse|null,
     *     KeyExportability?: 'EXPORTABLE'|'NON_EXPORTABLE'|'SENSITIVE'|null,
     *     KeyVersion?: string|null,
     *     OptionalBlocks?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
