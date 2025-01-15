<?php

namespace Sunaoka\Aws\Structures\FSx\ReleaseFileSystemNfsV3Locks\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $RootSquash
 * @property list<string>|null $NoSquashNids
 */
class LustreRootSquashConfiguration extends Shape
{
    /**
     * @param array{
     *     RootSquash?: string|null,
     *     NoSquashNids?: list<string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
