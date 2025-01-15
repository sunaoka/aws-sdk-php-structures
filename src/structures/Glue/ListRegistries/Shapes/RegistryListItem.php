<?php

namespace Sunaoka\Aws\Structures\Glue\ListRegistries\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $RegistryName
 * @property string|null $RegistryArn
 * @property string|null $Description
 * @property 'AVAILABLE'|'DELETING'|null $Status
 * @property string|null $CreatedTime
 * @property string|null $UpdatedTime
 */
class RegistryListItem extends Shape
{
    /**
     * @param array{
     *     RegistryName?: string|null,
     *     RegistryArn?: string|null,
     *     Description?: string|null,
     *     Status?: 'AVAILABLE'|'DELETING'|null,
     *     CreatedTime?: string|null,
     *     UpdatedTime?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
