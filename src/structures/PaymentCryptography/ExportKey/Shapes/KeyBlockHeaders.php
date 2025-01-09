<?php

namespace Sunaoka\Aws\Structures\PaymentCryptography\ExportKey\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property KeyModesOfUse $KeyModesOfUse
 * @property 'EXPORTABLE'|'NON_EXPORTABLE'|'SENSITIVE' $KeyExportability
 * @property string $KeyVersion
 * @property array<string, string> $OptionalBlocks
 */
class KeyBlockHeaders extends Shape
{
    /**
     * @param array{
     *     KeyModesOfUse?: KeyModesOfUse,
     *     KeyExportability?: 'EXPORTABLE'|'NON_EXPORTABLE'|'SENSITIVE',
     *     KeyVersion?: string,
     *     OptionalBlocks?: array<string, string>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
