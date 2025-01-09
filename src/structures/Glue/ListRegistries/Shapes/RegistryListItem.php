<?php

namespace Sunaoka\Aws\Structures\Glue\ListRegistries\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $RegistryName
 * @property string $RegistryArn
 * @property string $Description
 * @property 'AVAILABLE'|'DELETING' $Status
 * @property string $CreatedTime
 * @property string $UpdatedTime
 */
class RegistryListItem extends Shape
{
    /**
     * @param array{
     *     RegistryName?: string,
     *     RegistryArn?: string,
     *     Description?: string,
     *     Status?: 'AVAILABLE'|'DELETING',
     *     CreatedTime?: string,
     *     UpdatedTime?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
