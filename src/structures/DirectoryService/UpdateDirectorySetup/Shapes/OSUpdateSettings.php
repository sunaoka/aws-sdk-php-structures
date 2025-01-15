<?php

namespace Sunaoka\Aws\Structures\DirectoryService\UpdateDirectorySetup\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'SERVER_2012'|'SERVER_2019'|null $OSVersion
 */
class OSUpdateSettings extends Shape
{
    /**
     * @param array{OSVersion?: 'SERVER_2012'|'SERVER_2019'|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
