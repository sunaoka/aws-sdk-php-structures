<?php

namespace Sunaoka\Aws\Structures\StorageGateway\ListAutomaticTapeCreationPolicies\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $TapeBarcodePrefix
 * @property string $PoolId
 * @property int $TapeSizeInBytes
 * @property int<1, 10> $MinimumNumTapes
 * @property bool $Worm
 */
class AutomaticTapeCreationRule extends Shape
{
    /**
     * @param array{
     *     TapeBarcodePrefix: string,
     *     PoolId: string,
     *     TapeSizeInBytes: int,
     *     MinimumNumTapes: int<1, 10>,
     *     Worm?: bool
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
