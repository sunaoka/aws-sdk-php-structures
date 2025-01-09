<?php

namespace Sunaoka\Aws\Structures\Kms\ListKeyRotations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $KeyId
 * @property \Aws\Api\DateTimeResult $RotationDate
 * @property 'AUTOMATIC'|'ON_DEMAND' $RotationType
 */
class RotationsListEntry extends Shape
{
    /**
     * @param array{
     *     KeyId?: string,
     *     RotationDate?: \Aws\Api\DateTimeResult,
     *     RotationType?: 'AUTOMATIC'|'ON_DEMAND'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
