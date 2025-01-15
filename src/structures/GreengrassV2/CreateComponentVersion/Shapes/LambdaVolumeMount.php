<?php

namespace Sunaoka\Aws\Structures\GreengrassV2\CreateComponentVersion\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $sourcePath
 * @property string $destinationPath
 * @property 'ro'|'rw'|null $permission
 * @property bool|null $addGroupOwner
 */
class LambdaVolumeMount extends Shape
{
    /**
     * @param array{
     *     sourcePath: string,
     *     destinationPath: string,
     *     permission?: 'ro'|'rw'|null,
     *     addGroupOwner?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
