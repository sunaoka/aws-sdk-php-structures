<?php

namespace Sunaoka\Aws\Structures\Efs\PutAccountPreferences\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'LONG_ID'|'SHORT_ID'|null $ResourceIdType
 * @property list<'FILE_SYSTEM'|'MOUNT_TARGET'>|null $Resources
 */
class ResourceIdPreference extends Shape
{
    /**
     * @param array{
     *     ResourceIdType?: 'LONG_ID'|'SHORT_ID'|null,
     *     Resources?: list<'FILE_SYSTEM'|'MOUNT_TARGET'>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
