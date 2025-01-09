<?php

namespace Sunaoka\Aws\Structures\Greengrass\CreateResourceDefinitionVersion\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $GroupOwner
 * @property 'ro'|'rw' $GroupPermission
 */
class ResourceDownloadOwnerSetting extends Shape
{
    /**
     * @param array{
     *     GroupOwner: string,
     *     GroupPermission: 'ro'|'rw'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
