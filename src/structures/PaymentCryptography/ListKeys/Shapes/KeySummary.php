<?php

namespace Sunaoka\Aws\Structures\PaymentCryptography\ListKeys\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $KeyArn
 * @property 'CREATE_IN_PROGRESS'|'CREATE_COMPLETE'|'DELETE_PENDING'|'DELETE_COMPLETE' $KeyState
 * @property KeyAttributes $KeyAttributes
 * @property string $KeyCheckValue
 * @property bool $Exportable
 * @property bool $Enabled
 * @property 'PRIMARY'|'REPLICA'|null $MultiRegionKeyType
 * @property string|null $PrimaryRegion
 */
class KeySummary extends Shape
{
    /**
     * @param array{
     *     KeyArn: string,
     *     KeyState: 'CREATE_IN_PROGRESS'|'CREATE_COMPLETE'|'DELETE_PENDING'|'DELETE_COMPLETE',
     *     KeyAttributes: KeyAttributes,
     *     KeyCheckValue: string,
     *     Exportable: bool,
     *     Enabled: bool,
     *     MultiRegionKeyType?: 'PRIMARY'|'REPLICA'|null,
     *     PrimaryRegion?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
