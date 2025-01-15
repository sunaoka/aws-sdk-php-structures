<?php

namespace Sunaoka\Aws\Structures\Ses\DescribeReceiptRule\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Name
 * @property bool|null $Enabled
 * @property 'Require'|'Optional'|null $TlsPolicy
 * @property list<string>|null $Recipients
 * @property list<ReceiptAction>|null $Actions
 * @property bool|null $ScanEnabled
 */
class ReceiptRule extends Shape
{
    /**
     * @param array{
     *     Name: string,
     *     Enabled?: bool|null,
     *     TlsPolicy?: 'Require'|'Optional'|null,
     *     Recipients?: list<string>|null,
     *     Actions?: list<ReceiptAction>|null,
     *     ScanEnabled?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
