<?php

namespace Sunaoka\Aws\Structures\Rds\DescribeValidDBInstanceModifications\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $VolumeName
 * @property list<ValidStorageOptions>|null $Storage
 */
class ValidVolumeOptions extends Shape
{
    /**
     * @param array{
     *     VolumeName?: string|null,
     *     Storage?: list<ValidStorageOptions>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
