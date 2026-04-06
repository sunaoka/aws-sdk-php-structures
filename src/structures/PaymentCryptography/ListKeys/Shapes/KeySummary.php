<?php

namespace Sunaoka\Aws\Structures\PaymentCryptography\ListKeys\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool $Enabled
 * @property bool $Exportable
 * @property string $KeyArn
 * @property KeyAttributes $KeyAttributes
 * @property string $KeyCheckValue
 * @property 'CREATE_IN_PROGRESS'|'CREATE_COMPLETE'|'DELETE_PENDING'|'DELETE_COMPLETE' $KeyState
 */
class KeySummary extends Shape
{
    /**
     * @param array{
     *     Enabled: bool,
     *     Exportable: bool,
     *     KeyArn: string,
     *     KeyAttributes: KeyAttributes,
     *     KeyCheckValue: string,
     *     KeyState: 'CREATE_IN_PROGRESS'|'CREATE_COMPLETE'|'DELETE_PENDING'|'DELETE_COMPLETE'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
