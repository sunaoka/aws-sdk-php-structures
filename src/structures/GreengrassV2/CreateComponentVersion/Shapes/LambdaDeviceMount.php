<?php

namespace Sunaoka\Aws\Structures\GreengrassV2\CreateComponentVersion\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $path
 * @property 'ro'|'rw' $permission
 * @property bool $addGroupOwner
 */
class LambdaDeviceMount extends Shape
{
    /**
     * @param array{
     *     path: string,
     *     permission?: 'ro'|'rw',
     *     addGroupOwner?: bool
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
