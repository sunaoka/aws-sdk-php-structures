<?php

namespace Sunaoka\Aws\Structures\Efs\CreateAccessPoint\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Path
 * @property CreationInfo $CreationInfo
 */
class RootDirectory extends Shape
{
    /**
     * @param array{
     *     Path?: string,
     *     CreationInfo?: CreationInfo
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
