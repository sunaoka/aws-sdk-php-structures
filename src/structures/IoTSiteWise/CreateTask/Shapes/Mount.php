<?php

namespace Sunaoka\Aws\Structures\IoTSiteWise\CreateTask\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $name
 * @property string $relativePath
 * @property MountSource $source
 * @property 'SHARED_STORAGE' $storageType
 */
class Mount extends Shape
{
    /**
     * @param array{
     *     name: string,
     *     relativePath: string,
     *     source: MountSource,
     *     storageType: 'SHARED_STORAGE'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
