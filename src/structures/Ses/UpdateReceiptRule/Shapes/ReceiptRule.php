<?php

namespace Sunaoka\Aws\Structures\Ses\UpdateReceiptRule\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Name
 * @property bool $Enabled
 * @property 'Require'|'Optional' $TlsPolicy
 * @property list<string> $Recipients
 * @property list<ReceiptAction> $Actions
 * @property bool $ScanEnabled
 */
class ReceiptRule extends Shape
{
    /**
     * @param array{
     *     Name: string,
     *     Enabled?: bool,
     *     TlsPolicy?: 'Require'|'Optional',
     *     Recipients?: list<string>,
     *     Actions?: list<ReceiptAction>,
     *     ScanEnabled?: bool
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
