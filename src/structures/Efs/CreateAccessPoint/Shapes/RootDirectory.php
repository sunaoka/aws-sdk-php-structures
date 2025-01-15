<?php

namespace Sunaoka\Aws\Structures\Efs\CreateAccessPoint\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Path
 * @property CreationInfo|null $CreationInfo
 */
class RootDirectory extends Shape
{
    /**
     * @param array{
     *     Path?: string|null,
     *     CreationInfo?: CreationInfo|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
