<?php

namespace Sunaoka\Aws\Structures\Kms\ListKeyRotations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $KeyId
 * @property \Aws\Api\DateTimeResult|null $RotationDate
 * @property 'AUTOMATIC'|'ON_DEMAND'|null $RotationType
 */
class RotationsListEntry extends Shape
{
    /**
     * @param array{
     *     KeyId?: string|null,
     *     RotationDate?: \Aws\Api\DateTimeResult|null,
     *     RotationType?: 'AUTOMATIC'|'ON_DEMAND'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
