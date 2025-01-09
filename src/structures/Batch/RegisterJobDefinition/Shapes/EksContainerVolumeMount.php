<?php

namespace Sunaoka\Aws\Structures\Batch\RegisterJobDefinition\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $name
 * @property string $mountPath
 * @property string $subPath
 * @property bool $readOnly
 */
class EksContainerVolumeMount extends Shape
{
    /**
     * @param array{
     *     name?: string,
     *     mountPath?: string,
     *     subPath?: string,
     *     readOnly?: bool
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
