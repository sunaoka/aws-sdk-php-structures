<?php

namespace Sunaoka\Aws\Structures\Kms\ListKeyRotations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $KeyId
 * @property string|null $KeyMaterialId
 * @property string|null $KeyMaterialDescription
 * @property 'IMPORTED'|'PENDING_IMPORT'|null $ImportState
 * @property 'NON_CURRENT'|'CURRENT'|'PENDING_ROTATION'|null $KeyMaterialState
 * @property 'KEY_MATERIAL_EXPIRES'|'KEY_MATERIAL_DOES_NOT_EXPIRE'|null $ExpirationModel
 * @property \Aws\Api\DateTimeResult|null $ValidTo
 * @property \Aws\Api\DateTimeResult|null $RotationDate
 * @property 'AUTOMATIC'|'ON_DEMAND'|null $RotationType
 */
class RotationsListEntry extends Shape
{
    /**
     * @param array{
     *     KeyId?: string|null,
     *     KeyMaterialId?: string|null,
     *     KeyMaterialDescription?: string|null,
     *     ImportState?: 'IMPORTED'|'PENDING_IMPORT'|null,
     *     KeyMaterialState?: 'NON_CURRENT'|'CURRENT'|'PENDING_ROTATION'|null,
     *     ExpirationModel?: 'KEY_MATERIAL_EXPIRES'|'KEY_MATERIAL_DOES_NOT_EXPIRE'|null,
     *     ValidTo?: \Aws\Api\DateTimeResult|null,
     *     RotationDate?: \Aws\Api\DateTimeResult|null,
     *     RotationType?: 'AUTOMATIC'|'ON_DEMAND'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
