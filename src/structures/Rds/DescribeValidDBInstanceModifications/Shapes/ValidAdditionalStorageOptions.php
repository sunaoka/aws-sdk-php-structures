<?php

namespace Sunaoka\Aws\Structures\Rds\DescribeValidDBInstanceModifications\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool|null $SupportsAdditionalStorageVolumes
 * @property list<ValidVolumeOptions>|null $Volumes
 */
class ValidAdditionalStorageOptions extends Shape
{
    /**
     * @param array{
     *     SupportsAdditionalStorageVolumes?: bool|null,
     *     Volumes?: list<ValidVolumeOptions>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
