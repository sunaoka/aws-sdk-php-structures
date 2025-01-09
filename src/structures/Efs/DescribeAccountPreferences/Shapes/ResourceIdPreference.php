<?php

namespace Sunaoka\Aws\Structures\Efs\DescribeAccountPreferences\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'LONG_ID'|'SHORT_ID' $ResourceIdType
 * @property list<'FILE_SYSTEM'|'MOUNT_TARGET'> $Resources
 */
class ResourceIdPreference extends Shape
{
    /**
     * @param array{
     *     ResourceIdType?: 'LONG_ID'|'SHORT_ID',
     *     Resources?: list<'FILE_SYSTEM'|'MOUNT_TARGET'>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
