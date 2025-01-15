<?php

namespace Sunaoka\Aws\Structures\Batch\RegisterJobDefinition\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $name
 * @property string|null $mountPath
 * @property string|null $subPath
 * @property bool|null $readOnly
 */
class EksContainerVolumeMount extends Shape
{
    /**
     * @param array{
     *     name?: string|null,
     *     mountPath?: string|null,
     *     subPath?: string|null,
     *     readOnly?: bool|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
